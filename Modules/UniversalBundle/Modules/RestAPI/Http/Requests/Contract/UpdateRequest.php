<?php

namespace Modules\RestAPI\Http\Requests\Contract;

use Modules\RestAPI\Http\Requests\BaseRequest;

class UpdateRequest extends BaseRequest
{
    public function authorize()
    {
        $user = api_user();

        return in_array('contracts', $user->modules) && ($user->hasRole('admin') || $user->cans('edit_contract'));
    }

    public function rules()
    {
        return [
            //
        ];
    }
}
