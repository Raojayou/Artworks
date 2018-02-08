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
            'horario_apertura' => 'required|numeric',
            'horario_cierre' => 'required|numeric',
            'web' => 'required',
            'social' => 'required',
            'type' => 'required|string|max:25',
            'period' => 'required|numeric',
            'description' => 'required|string|max:255',
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

            'horario_apertura.required' => 'Es necesario completar el campo Horario de apertura.',
            'horario_apertura.numeric' => 'El "Horario de Apertura" debe ser un número',

            'horario_cierre.required' => 'Es necesario completar el campo Horario de cierre.',
            'horario_cierre.numeric' => 'El "Horario de Cierre" debe ser un número',

            'web.required' => 'Es necesario completar el campo Página Web.',
            'social.required' => 'Es necesario completar el campo Redes Sociales',

            'type.required' => 'Es necesario completar el campo Tipo de Museo',
            'type.string' => 'El tipo de museos debe ser una cadena de caracteres.',
            'type.max' => 'Has sobrepasado los 25 caracteres disponibles para el "Tipo de Museo".',

            'period.required' => 'Es necesario completar el campo Época de las Obras.',
            'period.numeric' => 'La "Época de las Obras" debe ser un número',

            'description.required' => 'Es necesario completar el campo Descripción.',
            'description.string' => 'La descripción debe ser una cadena de caracteres.',
            'description.max' => 'Has sobrepasado los 255 caracteres disponibles para la "Descripción".',
        ];
    }
}