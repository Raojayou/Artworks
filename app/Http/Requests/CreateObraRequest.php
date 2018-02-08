<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateObraRequest extends FormRequest
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
            'name' => 'required|string|max:50',
            'type' => 'required|string|max:25',
            'tecnique' => 'required',
            'materials' => 'required',
            'review' => 'required|string|max:255',
        ];
    }
    /**
     * Definición de los mensajes de validación.
     *
     * @return array
     */
    public function messages()
    {
        // Se espeficican los mensajes de validación para las reglas definidas
        // en el método rules de esta clase.
        return [
            'name.required' => 'Es necesario completar el campo Nombre del Museo.',
            'name.string' => 'El nombre debe ser una cadena de caracteres.',
            'name.max' => 'Has sobrepasado los 50 caracteres disponibles para el "Nombre".',

            'type.required' => 'Es necesario completar el campo Tipo de Obra',
            'type.string' => 'El tipo de obra debe ser una cadena de caracteres.',
            'type.max' => 'Has sobrepasado los 25 caracteres disponibles para el "Tipo de Obra".',

            'tecnique.required' => 'Es necesario completar el campo Técnica Usada.',

            'materials.required' => 'Es necesario completar el campo Materiales Usados.',

            'review.required' => 'Es necesario completar el campo Opinión.',
            'review.string' => 'La Opinión debe ser una cadena de caracteres.',
            'review.max' => 'Has sobrepasado los 255 caracteres disponibles para la "Opinión".',
        ];
    }
}
