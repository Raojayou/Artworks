<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'lastName' => 'required|string|max:50',
            'username' => 'required|string|max:50|unique:users',
            'email' => 'required|max:50|email|unique:users',
            'phone' => 'required|numeric|max:12',
            'website' => 'required|string|confirmed',
            'about' => 'required|string|max:200',
            'password' => 'required'
        ];
    }

    /**
     * Definición de los mensajes de validación.
     *
     * @return array
     */
    public function messages()
    {
        // Especificación de los mensajes de validación para las reglas definidas
        // en el método rules de arriba.
        return [
            'name.required' => 'Es necesario completar el campo "Nombre".',
            'name.max' => 'Has sobrepasado los 50 caracteres disponibles para el "Nombre".',
            'name.string' => 'El nombre debe ser una cadena de caracteres.',

            'lastName.required' => 'Es necesario completar el campo "nombre".',
            'lastName.max' => 'Has sobrepasado los 50 caracteres disponibles para el "nombre".',
            'lastName.string' => 'El nombre debe ser una cadena de caracteres.',

            'username.required' => 'Es necesario completar el campo "Nombre de Usuario".',
            'username.max' => 'Has sobrepasado los 50 caracteres disponibles para el "Nombre de Usuario".',
            'username.string' => 'El nombre de usuario debe ser una cadena de caracteres.',

            'email.required' => 'Es necesario completar el campo "email".',
            'email.max' => 'Has sobrepasado los 50 caracteres disponibles para el "email".',
            'email.email' => 'El email debe ser un email válido.',
            'email.unique' => 'El email debe ser un email disponible.',

            'phone.required' => 'Es necesario completar el campo "móvil".',
            'phone.max' => 'Has sobrepasado los 12 caracteres disponibles para el "móvil".',
            'phone.numeric' => 'El móvil debe ser un móvil válido.',

            'website.unique' => 'La página web debe ser una página web disponible.',

            'about.required' => 'La descripción es obligatoria.',
            'about.string' => 'La descripción debe ser una cadena de caracteres',
            'about.max' => 'La descripción debe tener 200 caracteres como máximo',
        ];
    }
}