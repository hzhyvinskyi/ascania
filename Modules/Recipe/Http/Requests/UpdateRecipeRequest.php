<?php

namespace Modules\Recipe\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class UpdateRecipeRequest extends BaseFormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string|min:3',
            'image' => 'nullable|image',
            'category_id' => 'required',
            'times_id' => 'bail|required|integer',
            'persons_id' => 'bail|required|integer',
            'complexity_id' => 'bail|required|integer',
            'text' => 'nullable|string|min:20',
            'intro' => 'nullable|string|min:10'
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
