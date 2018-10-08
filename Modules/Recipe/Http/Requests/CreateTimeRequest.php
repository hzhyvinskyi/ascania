<?php

namespace Modules\Recipe\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class CreateTimeRequest extends BaseFormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|integer'
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
