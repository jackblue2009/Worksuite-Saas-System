<?php

namespace App\Http\Requests\Tickets;

use App\Http\Requests\CoreRequest;
use App\Traits\CustomFieldsRequestTrait;

class StoreCustomTicket extends CoreRequest
{
    use CustomFieldsRequestTrait;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        \Illuminate\Support\Facades\Validator::extend('check_superadmin', function ($attribute, $value, $parameters, $validator) {
            return !\App\Models\User::withoutGlobalScopes([\App\Scopes\ActiveScope::class, \App\Scopes\CompanyScope::class])
                ->where('email', $value)
                ->where('is_superadmin', 1)
                ->exists();
        });

        $setting = \global_setting();
        $rules = array();
        $rules['name'] = 'required';
        $rules['email'] = 'required|email:rfc,strict|check_superadmin';
        $rules['ticket_subject'] = 'required';
        $rules['assign_group'] = 'required';
        $rules['message'] = 'required|sometimes';
        $rules['ticket_description'] = 'required|sometimes';

        $rules = $this->customFieldRules($rules);

        if($setting->google_recaptcha_status == 'active' && $setting->ticket_form_google_captcha == 1 && ($setting->google_recaptcha_v2_status == 'active')){
            $rules['g-recaptcha-response'] = 'required';
        }

        return $rules;
    }

    public function attributes()
    {
        $attributes = [];

        $attributes = $this->customFieldsAttributes($attributes);

        return $attributes;
    }

    public function messages()
    {
        return [
            'email.check_superadmin' => __('superadmin.emailCantUse'),
        ];
    }

}
