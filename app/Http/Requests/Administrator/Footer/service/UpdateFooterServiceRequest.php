<?php

namespace App\Http\Requests\Administrator\Footer\service;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFooterServiceRequest extends FormRequest
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
            'alt' => 'required|string|max:1000',
            'title' => 'required|string|max:100',
            'link' => 'required|string|max:200'
        ];
    }
}
