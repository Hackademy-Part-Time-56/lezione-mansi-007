<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; //sempre true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'pages' => 'required',
            'image' => 'mimes:jpeg,png,bmp,svg,jpg'
        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'Aoh! Obbligatorio',
            'pages.required' => 'necessito del dato',
        ];
    }
}
