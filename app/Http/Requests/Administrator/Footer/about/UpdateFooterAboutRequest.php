<?php

namespace App\Http\Requests\Administrator\Footer\about;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFooterAboutRequest extends FormRequest
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
            'title' => 'required|string|max:100',
            'description' => 'required|string|max:1000',
            'instagram' => 'required|string|max:200',
            'twitter' => 'required|string|max:200',
            'telegram' => 'required|string|max:200'
        ];
    }
}
