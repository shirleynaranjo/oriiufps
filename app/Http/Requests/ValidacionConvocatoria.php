<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionConvocatoria extends FormRequest
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
            'nombreConvocatoria' => 'required|max:200',
            'oferenteConvocatoria' => 'required|max:200',
            'vigenciaConvocatoria' => 'required|max:200',
            'infoConvocatoria' => 'nullable|file|max:2048|mimes:pdf',
            'estadoConvocatoria' => 'required|max:100',
        ];
    }
}
