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
        $rules = array();
        $rules['name'] = $this->validarName();
        $rules['horario_apertura'] = $this->validarHorarioApertura();
        $rules['horario_cierre'] = $this->validarHorarioCierre();
        $rules['web'] = $this->validarWeb();
        $rules['social'] = $this->validarSocial();
        $rules['type'] = $this->validarType();
        $rules['period'] = $this->validarPeriod();
        $rules['description'] = $this->validarDescription();

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
        $mensajesHorarioApertura = $this->mensajesHorarioApertura();
        $mensajesHorarioCierre = $this->mensajesHorarioCierre();
        $mensajesWeb = $this->mensajesWeb();
        $mensajesSocial = $this->mensajesSocial();
        $mensajesType = $this->mensajesType();
        $mensajesPeriod = $this->mensajesPeriod();
        $mensajesDescription = $this->mensajesDescription();
        $mensajes = array_merge(
            $mensajesName,
            $mensajesHorarioApertura,
            $mensajesHorarioCierre,
            $mensajesWeb,
            $mensajesSocial,
            $mensajesType,
            $mensajesPeriod,
            $mensajesDescription
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
        $mensajes["name.required"] = 'Es necesario completar el campo Nombre del Museo.';
        $mensajes["name.string"] = 'El nombre debe ser una cadena de caracteres.';
        $mensajes["name.max"] = 'Has sobrepasado los 50 caracteres disponibles para el Nombre del Museo.';
        return $mensajes;
    }

    protected function validarHorarioApertura()
    {
        return 'required|numeric';
    }

    protected function mensajesHorarioApertura()
    {
        $mensajes = array();
        $mensajes["horario_apertura.required"] = 'Es necesario completar el campo Horario de Apertura.';
        $mensajes["horario_apertura.numeric"] = 'El campo Horario de Apertura debe ser un número';
        return $mensajes;
    }

    protected function validarHorarioCierre()
    {
        return 'required|numeric';
    }

    protected function mensajesHorarioCierre()
    {
        $mensajes = array();
        $mensajes["horario_cierre.required"] = 'Es necesario completar el campo Horario de Cierre.';
        $mensajes["horario_cierre.numeric"] = 'El campo Horario de Cierre debe ser un número';
        return $mensajes;
    }

    protected function validarWeb()
    {
        return 'required';
    }

    protected function mensajesWeb()
    {
        $mensajes = array();
        $mensajes["web.required"] = 'Es necesario completar el campo Página Web.';
        return $mensajes;
    }

    protected function validarSocial()
    {
        return 'required';
    }

    protected function mensajesSocial()
    {
        $mensajes = array();
        $mensajes["social.required"] = 'Es necesario completar el campo Redes Sociales';
        return $mensajes;
    }

    protected function validarType()
    {
        return 'required';
    }

    protected function mensajesType()
    {
        $mensajes = array();
        $mensajes["type.required"] = 'Es necesario seleccionar el campo Tipo de Museo';
        return $mensajes;
    }

    protected function validarPeriod()
    {
        return 'required';
    }

    protected function mensajesPeriod()
    {
        $mensajes = array();
        $mensajes["period.required"] = 'Es necesario seleccionar el campo Época de las Obras.';
        return $mensajes;
    }

    protected function validarDescription()
    {
        return 'required|string|max:255';
    }

    protected function mensajesDescription()
    {
        $mensajes = array();
        $mensajes["description.required"] = 'Es necesario completar el campo Descripción.';
        $mensajes["description.string"] = 'La descripción debe ser una cadena de caracteres.';
        $mensajes["description.max"] = 'Has sobrepasado los 255 caracteres disponibles para la Descripción.';
        return $mensajes;
    }
}