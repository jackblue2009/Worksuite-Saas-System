<?php

namespace Modules\Purchase\Entities;

use App\Models\Currency;
use App\Models\UnitType;
use App\Models\BaseModel;
use App\Traits\HasCompany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PurchaseVendorCredit extends BaseModel
{

    use HasFactory, HasCompany;

    protected $fillable = [];

    protected $appends = ['vendor_credit_number'];

    public function vendors(): BelongsTo
    {
        return $this->belongsTo(PurchaseVendor::class, 'vendor_id');
    }

    public static function lastVendorCreditNumber()
    {
        return (int)PurchaseVendorCredit::max('credit_note_no');
    }

    public function items(): HasMany
    {
        return $this->hasMany(PurchaseVendorItem::class, 'credit_id');
    }

    public function unit(): BelongsTo
    {
        return $this->belongsTo(UnitType::class, 'unit_id');
    }

    public function currency(): BelongsTo
    {
        return $this->belongsTo(Currency::class, 'currency_id');
    }

    public function bills(): BelongsTo
    {
        return $this->belongsTo(PurchaseBill::class, 'bill_id');
    }

    public function vendorPayment(): HasMany
    {
        return $this->hasMany(PurchaseVendorPayment::class, 'purchase_vendor_id', 'purchase_vendor_id')->orderByDesc('paid_on');
    }

    public function getPaidAmount()
    {
        return $this->vendorPayment->sum('received_payment');
    }

    public function creditAmountUsed()
    {
        $payment = PurchasePaymentBill::where('purchase_vendor_credits_id', $this->id)->get();

        return ($payment) ? $payment->sum('total_paid') : 0;
    }

    /* This is overall amount, cannot be used for particular credit note */
    public function creditAmountRemaining()
    {
        return ($this->total) - $this->creditAmountUsed();
    }

    public function getOriginalVendorCreditNumberAttribute()
    {
        $purchaseSetting = PurchaseSetting::first();
        $zero = '';

        if (strlen($this->attributes['vendor_credit_number']) < $purchaseSetting->vendor_credit_number_digit) {
            $condition = $purchaseSetting->vendor_credit_number_digit - strlen($this->attributes['vendor_credit_number']);

            for ($i = 0; $i < $condition; $i++) {
                $zero = '0' . $zero;
            }
        }

        return $zero . $this->attributes['vendor_credit_number'];
    }

    public function getVendorCreditNumberAttribute()
    {
        if (is_null($this->id)) {
            return '';
        }

        $purchaseSetting = PurchaseSetting::first();

        $zero = '';

        if (strlen($this->id) < $purchaseSetting->vendor_credit_number_digit) {
            $condition = $purchaseSetting->vendor_credit_number_digit - strlen($this->id);

            for ($i = 0; $i < $condition; $i++) {
                $zero = '0' . $zero;
            }
        }

        return $purchaseSetting->vendor_credit_prefix . $purchaseSetting->vendor_credit_number_seprator . $zero . $this->id;

    }

}
