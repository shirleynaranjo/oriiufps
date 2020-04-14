<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionEvento extends FormRequest
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
        if ($this->route('id')) {
            return [
                'imagenMin' => 'nullable|max:1024|mimes:jpeg,jpg,png',
                'tituloEvento' => 'required|max:500',
                'lugarEvento' => 'required|max:500',
                'fechaEvento' => 'required|max:500',
                'horaEvento' => 'required|max:500',
                'descripcionEvento' => 'nullable|max:1000',
                'imagenEv' => 'nullable|image|max:1024|mimes:jpeg,jpg,png',
                'archivo' => 'nullable|file|max:2048|mimes:pdf',
            ];
        }else{
            return [
                'imagenMin' => 'required|max:1024|mimes:jpeg,jpg,png',
                'tituloEvento' => 'required|max:500',
                'lugarEvento' => 'required|max:500',
                'fechaEvento' => 'required|max:500',
                'horaEvento' => 'required|max:500',
                'descripcionEvento' => 'nullable|max:1000',
                'imagenEv' => 'nullable|image|max:1024|mimes:jpeg,jpg,png',
                'archivo' => 'nullable|file|max:2048|mimes:pdf',
            ];
        }
    }

    public function messages()
    {
        return [
            'imagenMin.max' => 'La imagen no puede tener un peso mayor a 1MB.',
            'imagenMin.mimes' => 'El campo imagen portada debe ser un archivo de tipo: jpeg, jpg, png.',
            'imagenMin.Ev' => 'El campo imagen debe ser un archivo de tipo: jpeg, jpg, png.',
            'imagenEv.max' => 'La imagen no puede tener un peso mayor a 1MB.',
            'archivo.max' =>  'El archivo pdf no puede tener un peso mayor a 2MB.',
        ];
    }
}
