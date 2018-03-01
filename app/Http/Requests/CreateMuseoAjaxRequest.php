<?php
namespace App\Http\Requests;
use App\Http\Requests\CreateMuseoRequest;

use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

class CreateMuseoAjaxRequest extends CreateMuseoRequest
{
    public function rules()
    {
        $rules = array();
        if($this->exists('name')){
            $rules['name'] = $this->validarName();
        }
        if($this->exists('horario_apertura')) {
            $rules['horario_apertura'] = $this->validarHorarioApertura();
        }
        if($this->exists('horario_cierre')){
            $rules['horario_cierre'] = $this->validarHorarioCierre();
        }
        if($this->exists('web')) {
            $rules['web'] = $this->validarWeb();
        }
        if($this->exists('social')){
            $rules['social'] = $this->validarSocial();
        }
        if($this->exists('type')) {
            $rules['type'] = $this->validarType();
        }
        if($this->exists('period')){
            $rules['period'] = $this->validarPeriod();
        }
        if($this->exists('description')) {
            $rules['description'] = $this->validarDescription();
        }
        return $rules;
    }
    protected function failedValidation($validator)
    {
        $errors = $validator->errors();
        $response = new JsonResponse([
            'name' => $errors->get('name'),
            'horario_apertura' => $errors->get('horario_apertura'),
            'horario_cierre' => $errors->get('horario_cierre'),
            'web' => $errors->get('web'),
            'social' => $errors->get('social'),
            'type' => $errors->get('type'),
            'period' => $errors->get('period'),
            'description' => $errors->get('description'),
        ]);

        throw new ValidationException($validator, $response);
    }
}