<?php

namespace App\Http\Requests\Administrator\Service;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServiceRequest extends FormRequest
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
            'alt' => 'required|string|max:200',
            'service_title_first' => 'required|string|max:250',
            'service_description_first' => 'required|string|max:500',
            'service_link_first' => 'required|string|max:250',
            'service_title_second' => 'required|string|max:250',
            'service_description_second' => 'required|string|max:500',
            'service_link_second' => 'required|string|max:250',
            'service_title_third' => 'required|string|max:250',
            'service_description_third' => 'required|string|max:500',
            'service_link_third' => 'required|string|max:250'
        ];
    }
}
