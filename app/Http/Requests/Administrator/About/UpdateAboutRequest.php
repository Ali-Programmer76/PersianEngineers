<?php

namespace App\Http\Requests\Administrator\About;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutRequest extends FormRequest
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
            'alt' => 'required|string|max:250',
            'title' => 'required|string|max:250',
            'subtitle' => 'required|string|max:250',
            'description' => 'required|string|max:1000',
            'help' => 'required|string|max:250',
            'service_title_first' => 'required|string|max:250',
            'service_description_first' => 'required|string|max:500',
            'service_title_second' => 'required|string|max:250',
            'service_description_second' => 'required|string|max:500',
            'service_title_third' => 'required|string|max:250',
            'service_description_third' => 'required|string|max:500',
            'service_title_fourth' => 'required|string|max:250',
            'service_description_fourth' => 'required|string|max:500',
            'experience_title' => 'required|string|max:100',
            'experience_description' => 'required|string|max:250',
        ];
    }
}
