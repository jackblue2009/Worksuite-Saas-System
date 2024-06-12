<?php

namespace App\Http\Controllers\Payment;

use App\Models\Company;
use Exception;
use Froiden\RestAPI\Exceptions\ApiException;
use PayPal\Api\Item;
use App\Models\Order;
use PayPal\Api\Payer;
use PayPal\Api\Amount;
use App\Models\Invoice;
use PayPal\Api\Payment;
use PayPal\Api\ItemList;
use PayPal\Api\Agreement;
use PayPal\Api\Transaction;
use PayPal\Rest\ApiContext;
use Illuminate\Http\Request;
use PayPal\Api\RedirectUrls;
use App\Traits\MakePaymentTrait;
use PayPal\Api\PaymentExecution;
use App\Http\Controllers\Controller;
use App\Traits\MakeOrderInvoiceTrait;
use PayPal\Auth\OAuthTokenCredential;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use App\Models\Payment as ModelsPayment;
use Illuminate\Support\Facades\Redirect;

class BenefitController extends Controller
{
    use MakePaymentTrait, MakeOrderInvoiceTrait;

    private $api_context;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = 'Benefit';
    }

    public function setKeys($companyHash)
    {
        $company = Company::where('hash', $companyHash)->first();

        if (!$company) {
            throw new ApiException('Please enter the correct webhook url. You have entered wrong webhook url', null, 200);
        }

        $this->credential = $company->paymentGatewayCredentials;

        $this->benefitMode = $this->credential->benefit_mode;

        $this->benefitClientId = $this->benefitMode == 'sandbox' ? $this->credential->sandbox_benefit_client_id : $this->credential->benefit_client_id;

        $this->benefitClientSecret = $this->benefitMode == 'sandbox' ? $this->credential->sandbox_benefit_secret : $this->credential->benefit_secret;

        /** setup Benefit api context **/
        config(['benefit.settings.mode' => $this->credential->benefit_mode]);
        $benefit_conf = Config::get('benefit');
        $this->api_context = new ApiContext(new OAuthTokenCredential($this->benefitClientId, $this->benefitClientSecret));
        $this->api_context->setConfig($benefit_conf['settings']);

    }

    /**
     * Show the application paywith paypalpage.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function payWithBenefit()
    {
        return view('paywithbenefit', $this->data);
    }

    /**
     * Store a details of payment with Benefit.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    /* Id could be order id OR invoice id, differentiate according to type  */
    public function paymentWithbenefit(Request $request, $id)
    {
        $redirectRoute = $request->type == 'order' ? 'orders.show' : 'invoices.show';
        $redirectRoute = route($redirectRoute, $id);

        return $this->makeBenefitPayment($id, $redirectRoute, $request->type);
    }

    public function paymentWithbenefitPublic(Request $request, $invoiceId)
    {
        $invoice = Invoice::findOrFail($invoiceId);
        $this->setKeys($invoice->company->hash);

        $redirectRoute = 'front.invoice';
        $redirectRoute = route($redirectRoute, $invoice->hash);

        return $this->makeBenefitPayment($invoiceId, $redirectRoute);
    }

    private function makeBenefitPayment($id, $redirectRoute, $type = null)
    {

        if ($type == 'order') {
            Session::put('enc_invoice_id', $id);
            $order = Order::findOrFail($id);
            $company = $order->company;
            /** @phpstan-ignore-next-line */
            $currencyCode = $order->currency->currency_code;
            $payAmount = $order->total;
            $paymentTitle = 'Payment for order #' . $order->id;

        }
        else {
            $invoice = Invoice::findOrFail($id);
            Session::put('enc_invoice_id', $invoice->hash);
            $company = $invoice->company;

            $currencyCode = $invoice->currency->currency_code;
            $payAmount = $invoice->due_amount;
            $paymentTitle = 'Payment for invoice #' . $invoice->invoice_number;
        }

        $this->setKeys($company->hash);
        $companyName = $company->company_name;
        $paymentType = !is_null($type) ? 'order' : 'invoice';

        $payer = new Payer();
        $payer->setPaymentMethod('benefit');

        $item_1 = new Item();

        $item_1->setName($paymentTitle)
            /** item name **/
            ->setCurrency($currencyCode)
            ->setQuantity(1)
            ->setPrice($payAmount);
        /** unit price **/

        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        $amount->setCurrency($currencyCode)
            ->setTotal($payAmount);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription($companyName . ' ' . $paymentTitle);

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(route('get_benefit_status'))
            /** Specify return URL **/
            ->setCancelUrl(route('get_benefit_status'));

        /* Make invoice for this order */
        if ($paymentType == 'order' && isset($order)) {
            $invoice = $this->makeOrderInvoice($order);
        }

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));

        config(['benefit.secret' => $this->benefitClientSecret]);
        config(['benefit.settings.mode' => $this->benefitMode]);

        try {
            $payment->create($this->api_context);

        } catch (\Benefit\Exception\BenefitConnectionException $ex) {

            if ($type == 'order' && isset($order)) {
                $this->paymentFailed($ex, $payAmount, null, $order);
            }
            elseif ($type == 'invoice' && isset($invoice)) {
                $this->paymentFailed($ex, $payAmount, $invoice, null);
            }

            if (Config::get('app.debug')) {
                Session::put('error', 'Connection timeout');

                return Redirect::to($redirectRoute);
                /** echo "Exception: " . $ex->getMessage() . PHP_EOL; **/
                /** $err_data = json_decode($ex->getData(), true); **/
                /** exit; **/
            }
            else {
                Session::put('error', __('messages.errorOccured'));

                return Redirect::to($redirectRoute);
                /** die(__('messages.errorOccured')); **/
            }
        }

        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        /** add payment ID to session **/
        Session::put('paypal_payment_id', $payment->getId());

        Session::put('type', $paymentType);
        /** @phpstan-ignore-next-line */
        Session::put('invoice_id', $invoice->id);

        /* make invoice payment here */
        /** @phpstan-ignore-next-line */
        $this->makePayment('PayPal', $payAmount, $invoice, $payment->getId());

        if (isset($redirect_url)) {
            /** redirect to paypal **/
            return Redirect::away($redirect_url);
        }

        Session::put('error', 'Unknown error occurred');

        return Redirect::to($redirectRoute);
    }
}