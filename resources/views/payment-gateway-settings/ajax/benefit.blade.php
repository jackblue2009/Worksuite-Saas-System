<div class="col-xl-12 col-lg-12 col-md-12 ntfcn-tab-content-left w-100 p-20">
    @include('sections.password-autocomplete-hide')
    <input type="hidden" name="payment_method" value="benefit">

    <div class="row">
        <div class="col-lg-12 mb-3">
            <x-forms.checkbox :fieldLabel="__('modules.payments.benefitStatus')" fieldName="benefit_status"
                fieldId="benefit_status" fieldValue="active" fieldRequired="true"
                :checked="$credentials->benefit_status == 'active'" />
        </div>
    </div>
    <div class="row @if ($credentials->benefit_status == 'deactive') d-none @endif" id="benefit_details">
        <div class="col-lg-12">
            <x-forms.select fieldId="benefit_mode" :fieldLabel="__('app.selectEnvironment')" fieldName="benefit_mode">
                <option value="sandbox" @if ($credentials->benefit_mode == 'sandbox') selected @endif>@lang('app.sandbox')</option>
                <option value="live" @if ($credentials->benefit_mode == 'live') selected @endif>@lang('app.live')</option>
            </x-forms.select>
        </div>

        <div class="col-lg-6 benefit_live {{$credentials->benefit_mode == 'live' ? '' : 'd-none'}}">
            <x-forms.text class="mr-0 mr-lg-2 mr-md-2" :fieldLabel="__('modules.payments.benefitTranportalId')"
                fieldName="benefit_key" fieldId="benefit_key" :fieldValue="$credentials->benefit_key"
                :fieldPlaceholder="__('placeholders.paymentGateway.benefitTranportalId')" fieldRequired="true"></x-forms.text>
        </div>
        <div class="col-lg-6 benefit_live {{$credentials->benefit_mode == 'live' ? '' : 'd-none'}}">
            <x-forms.label class="mt-3" fieldId="password" :fieldLabel="__('modules.payments.benefitTranportalSecret')" fieldRequired="true">
            </x-forms.label>
            <x-forms.input-group>
                <input type="password" name="benefit_secret" id="benefit_secret" class="form-control height-35 f-14"
                    value="{{ $credentials->benefit_secret }}" autocomplete="off">
                <x-slot name="preappend">
                    <button type="button" data-toggle="tooltip" data-original-title="{{ __('messages.viewKey') }}"
                        class="btn btn-outline-secondary border-grey height-35 toggle-password"><i
                            class="fa fa-eye"></i></button>
                </x-slot>
            </x-forms.input-group>
        </div>

        <div class="col-lg-6 benefit_sandbox {{$credentials->benefit_mode == 'sandbox' ? '' : 'd-none'}}">
            <x-forms.text class="mr-0 mr-lg-2 mr-md-2" :fieldLabel="__('app.test') . ' ' . __('modules.payments.benefitTranportalId')"
                fieldName="test_benefit_key" fieldId="test_benefit_key" :fieldValue="$credentials->test_benefit_key"
                :fieldPlaceholder="__('placeholders.paymentGateway.benefitTranportalId')" fieldRequired="true"></x-forms.text>
        </div>
        <div class="col-lg-6 benefit_sandbox {{$credentials->benefit_mode == 'sandbox' ? '' : 'd-none'}}">
            <x-forms.label class="mt-3" fieldId="password" :fieldLabel="__('app.test') . ' ' . __('modules.payments.benefitTranportalSecret')" fieldRequired="true">
            </x-forms.label>
            <x-forms.input-group>
                <input type="password" name="test_benefit_secret" id="test_benefit_secret" class="form-control height-35 f-14"
                    value="{{ $credentials->test_benefit_secret }}" autocomplete="off">
                <x-slot name="preappend">
                    <button type="button" data-toggle="tooltip" data-original-title="{{ __('messages.viewKey') }}"
                        class="btn btn-outline-secondary border-grey height-35 toggle-password"><i
                            class="fa fa-eye"></i></button>
                </x-slot>
            </x-forms.input-group>
        </div>

        <div class="col-lg-12">
            <x-forms.label fieldId="" for="mail_from_name" :fieldLabel="__('app.webhook')" class="mt-3">
            </x-forms.label>
            <p class="text-bold">
                <span id="webhook-link-text">{{ $webhookRoute }}</span>
                <a href="javascript:;" class="btn-copy btn-secondary f-12 rounded p-1 py-2 ml-1"
                    data-clipboard-target="#webhook-link-text">
                    <i class="fa fa-copy mx-1"></i>@lang('app.copy')</a>
            </p>
            <p class="text-primary">(@lang('messages.addBenefitWebhookUrl'))</p>
        </div>

    </div>
</div>
<!-- Buttons Start -->
<div class="w-100 border-top-grey">
    <x-setting-form-actions>
        <div class="d-flex">
            <x-forms.button-primary class="mr-3 w-100" icon="check" id="save_benefit_data">@lang('app.save')
            </x-forms.button-primary>
        </div>
    </x-setting-form-actions>
</div>
<!-- Buttons End -->
<script src="{{ asset('vendor/jquery/clipboard.min.js') }}"></script>
<script>

    $(document).ready(function () {
        $('body').on('change', '#benefit_mode', function () {
            if ($(this).val() == 'live') {
                $('.benefit_live').removeClass('d-none');
                $('.benefit_sandbox').addClass('d-none');
            } else {
                $('.benefit_live').addClass('d-none');
                $('.benefit_sandbox').removeClass('d-none');
            }
        });
    });


    var clipboard = new ClipboardJS('.btn-copy');

    clipboard.on('success', function(e) {
        Swal.fire({
            icon: 'success',
            text: '@lang("app.webhookUrlCopied")',
            toast: true,
            position: 'top-end',
            timer: 3000,
            timerProgressBar: true,
            showConfirmButton: false,
            customClass: {
                confirmButton: 'btn btn-primary',
            },
            showClass: {
                popup: 'swal2-noanimation',
                backdrop: 'swal2-noanimation'
            },
        })
    });
</script>