<?php

namespace Modules\Recipe\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class UpdateTimeRequest extends BaseFormRequest
{
    public function rules()
    {
        return [
            'amount_of_time' => 'bail|required|integer|max:300'
        ];
    }

    public function translationRules()
    {
        return [];
    }

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [];
    }

    public function translationMessages()
    {
        return [];
    }
}
