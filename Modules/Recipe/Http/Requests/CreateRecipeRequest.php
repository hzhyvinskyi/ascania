<?php

namespace Modules\Recipe\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class CreateRecipeRequest extends BaseFormRequest
{
    public function rules()
    {
        return [
            'name' => 'bail|required|unique:recipe__recipes|min:3',
            'image' => 'bail|required|image',
            'category_id' => 'required',
            'times_id' => 'required|integer',
            'persons_id' => 'required|integer',
            'complexity_id' => 'required|integer',
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
