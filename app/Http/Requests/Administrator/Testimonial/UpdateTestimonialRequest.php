<?php

namespace App\Http\Requests\Administrator\Testimonial;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTestimonialRequest extends FormRequest
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
            'name' => 'required|string|max:100',
            'job' => 'required|string|max:100',
            'description' => 'required|string|max:1000',
        ];
    }
}
