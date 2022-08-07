<?php

namespace App\Http\Requests\Administrator\Blog;

use Illuminate\Foundation\Http\FormRequest;

class CreateBlogRequest extends FormRequest
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
            'alt' => 'required|string|max:1000',
            'subject' => 'required|string|max:200',
            'body' => 'required|string',
            'title' => 'required|string|max:100',
            'description' => 'required|string|max:1000',
            'keywords' => 'required|string|max:200'
        ];
    }
}
