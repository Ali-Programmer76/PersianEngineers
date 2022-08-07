<?php

namespace App\Http\Requests\Administrator\Faq;

use Illuminate\Foundation\Http\FormRequest;

class CreateFaqRequest extends FormRequest
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
            'description' => 'required|string',
            'faq_title_first' => 'required|string|max:100',
            'faq_description_first' => 'required|string|max:1000',
            'faq_title_second' => 'required|string|max:100',
            'faq_description_second' => 'required|string|max:1000',
            'faq_title_third' => 'required|string|max:100',
            'faq_description_third' => 'required|string|max:1000'
        ];
    }
}
