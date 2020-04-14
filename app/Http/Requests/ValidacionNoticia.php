<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionNoticia extends FormRequest
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
        if ($this->route('slug')) {
            return [
                'imagenPortada' => 'nullable|max:1024|mimes:jpeg,jpg,png',
                'tituloNoticia' => 'required|max:500',
                'fechaPublicacion' => 'required|max:500',
                'descripcionNoticia' => 'required|max:5000',                
                'imagenNoti' => 'nullable|image|max:1024|mimes:jpeg,jpg,png',
                'video' => 'nullable|max:200',
            ];
        }else{
            return [
                'imagenPortada' => 'required|max:1024|mimes:jpeg,jpg,png',
                'tituloNoticia' => 'required|max:500',
                'fechaPublicacion' => 'required|max:500',
                'descripcionNoticia' => 'required|max:5000',                
                'imagenNoti' => 'nullable|image|max:1024|mimes:jpeg,jpg,png',
                'video' => 'nullable|max:200',
            ];
        }
    }

    public function messages()
    {
        return [
            'imagenIni.max' => 'La imagen no puede tener un peso mayor a 1MB.',
            'imagenIni.mimes' => 'El campo imagen portada debe ser un archivo de tipo: jpeg, jpg, png.',
            'imagenNoti.max' => 'La imagen no puede tener un peso mayor a 1MB.',
            'imagenNoti.mimes' => 'El campo imagen debe ser un archivo de tipo: jpeg, jpg, png.',
        ];
    }
}
