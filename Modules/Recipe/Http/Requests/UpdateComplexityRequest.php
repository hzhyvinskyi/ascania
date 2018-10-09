<?php

namespace Modules\Recipe\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class UpdateComplexityRequest extends BaseFormRequest
{
    public function rules()
    {
        return [
            'complexity_level' => 'bail|required|string|min:3|max:60'
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
