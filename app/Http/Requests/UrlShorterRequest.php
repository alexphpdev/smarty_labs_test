<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UrlShorterRequest extends FormRequest
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
            'original_url' => ['required', 'string'],
        ];
    }

    /**
     * @return string[]
     */
    public function messages()
    {
        return [
            'original_url.required' => 'Please, enter your link!',
        ];
    }
}
