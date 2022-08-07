<?php

namespace App\Http\Requests\Administrator\Introduction;

use Illuminate\Foundation\Http\FormRequest;

class CreateIntroductionRequest extends FormRequest
{
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
        return [
            'image' => 'required|image|mimes:png,jpg,jpeg,webp|max:5000',
            'title' => 'required|string|max:250',
            'description' => 'required|string|max:500',
            'link' => 'required|string|max:250',
        ];
    }
}
