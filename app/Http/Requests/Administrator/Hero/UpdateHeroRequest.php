<?php

namespace App\Http\Requests\Administrator\Hero;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHeroRequest extends FormRequest
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
            'image' => 'image|mimes:png,jpg,jpeg,webp|max:5000',
            'established' => 'required|string|max:50',
            'description' => 'required|string|max:500',
            'about' => 'required|string|max:100',
            'question' => 'required|string|max:100'
        ];
    }
}
