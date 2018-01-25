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
            'name.required' => 'Es necesario completar el campo nombre',
            'horario.required' => 'Es necesario completar el campo imagen',
            'web.required' => 'Es necesario completar los campos latitud y longitud',
            'social.required' => 'Es necesario completar el campo tema',
            'type.required' => 'Es necesario completar el campo fecha',
            'period.required' => 'Es necesario completar el campo duracion',
            'description.required' => 'Es necesario completar el campo edad',
        ];
    }
}
