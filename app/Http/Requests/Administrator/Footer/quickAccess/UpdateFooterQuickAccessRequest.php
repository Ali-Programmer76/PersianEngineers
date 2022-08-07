<?php

namespace App\Http\Requests\Administrator\Footer\quickAccess;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFooterQuickAccessRequest extends FormRequest
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
            'title' => 'required|string|max:50',
            'link' => 'required|string|max:100'
        ];
    }
}
