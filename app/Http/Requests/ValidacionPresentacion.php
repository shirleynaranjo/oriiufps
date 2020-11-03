<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionPresentacion extends FormRequest
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
            'imagen' => 'nullable|max:1024|mimes:jpeg,jpg,png',
            'director' => 'required|max:100',
            'correo' => 'required|email|max:100',
            'textoPresentacion' => 'required|max:1000',  
        ];
    }
}
