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
        $rules = array();
        $rules['name'] = $this->validarName();
        $rules['type'] = $this->validarType();
        $rules['tecnique'] = $this->validarTecnique();
        $rules['materials'] = $this->validarWeb();
        $rules['review'] = $this->validarReview();

        return $rules;
    }

    /**
     * Definición de los mensajes de validación.
     *
     * @return array
     */
    public function messages()
    {
        $mensajesName = $this->mensajesName();
        $mensajesType = $this->mensajesType();
        $mensajesTecnique = $this->mensajesTecnique();
        $mensajesMaterials = $this->mensajesMaterials();
        $mensajesReview = $this->mensajesReview();
        $mensajes = array_merge(
            $mensajesName,
            $mensajesType,
            $mensajesTecnique,
            $mensajesMaterials,
            $mensajesReview
        );
        return $mensajes;
    }

    protected function validarName()
    {
        return 'required|string|max:50';
    }

    protected function mensajesName()
    {
        $mensajes = array();
        $mensajes["name.required"] = 'Es necesario completar el campo Nombre de la Obra.';
        $mensajes["name.string"] = 'El nombre debe ser una cadena de caracteres.';
        $mensajes["name.max"] = 'Has sobrepasado los 50 caracteres disponibles para el Nombre de la Obra.';
        return $mensajes;
    }

    protected function validarType()
    {
        return 'required';
    }

    protected function mensajesType()
    {
        $mensajes = array();
        $mensajes["type.required"] = 'Es necesario seleccionar el campo Tipo de Obra';
        return $mensajes;
    }

    protected function validarTecnique()
    {
        return 'required';
    }

    protected function mensajesTecnique()
    {
        $mensajes = array();
        $mensajes["tecnique.required"] = 'Es necesario completar el campo Técnicas Usadas.';
        return $mensajes;
    }

    protected function validarMaterials()
    {
        return 'required';
    }

    protected function mensajesMaterials()
    {
        $mensajes = array();
        $mensajes["materials.required"] = 'Es necesario completar el campo Materiales Usados.';
        return $mensajes;
    }

    protected function validarReview()
    {
        return 'required|string|max:255';
    }

    protected function mensajesReview()
    {
        $mensajes = array();
        $mensajes["review.required"] = 'Es necesario completar el campo Opinión.';
        $mensajes["review.string"] = 'La opinión debe ser una cadena de caracteres.';
        $mensajes["review.max"] = 'Has sobrepasado los 255 caracteres disponibles para el campo Opinión.';
        return $mensajes;
    }
}