<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMuseoRequest extends FormRequest
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
            'horario' => 'required',
            'web' => 'required',
            'social' => 'required',
            'type' => 'required',
            'period' => 'required',
            'description' => 'required|string|max:500',
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
            'horario.required' => 'Es necesario completar el campo Horario.',
            'web.required' => 'Es necesario completar el campo Página Web.',
            'social.required' => 'Es necesario completar el campo Redes Sociales',
            'type.required' => 'Es necesario completar el campo Tipo de Museo',
            'period.required' => 'Es necesario completar el campo Época de las Obras.',
            'description.required' => 'Es necesario completar el campo Descripción.',
        ];
    }
}
