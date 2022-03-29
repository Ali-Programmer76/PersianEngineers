<?php

namespace App\Http\Requests\Administrator\Seo;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSeoRequest extends FormRequest
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
            'title' => 'required|max:250',
            'description' => 'required|max:1000',
            'keywords' => 'required|max:1000',
            'site_name' => 'required|max:250',
            'site_url' => 'required|max:250',
            'twitter_name' => 'required|max:250',
            'twitter_description' => 'required|max:1000',
        ];
    }
}
