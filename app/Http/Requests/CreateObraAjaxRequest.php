<?php
namespace App\Http\Requests;

use App\Http\Requests\CreateObraRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

/**
 * Class CreateObraAjaxRequest
 * @package App\Http\Requests
 */
class CreateObraAjaxRequest extends CreateObraRequest
{
    /**
     * @return array
     */
    public function rules()
    {
        $rules = array();
        if($this->exists('name')){
            $rules['name'] = $this->validarName();
        }
        if($this->exists('type')) {
            $rules['type'] = $this->validarType();
        }
        if($this->exists('tecnique')){
            $rules['tecnique'] = $this->validarTecnique();
        }
        if($this->exists('materials')) {
            $rules['materials'] = $this->validarMaterials();
        }
        if($this->exists('review')){
            $rules['review'] = $this->validarReview();
        }
        return $rules;
    }

    /**
     * @param \Illuminate\Contracts\Validation\Validator $validator
     * @throws ValidationException
     */
    protected function failedValidation($validator)
    {
        $errors = $validator->errors();
        $response = new JsonResponse([
            'name' => $errors->get('name'),
            'type' => $errors->get('type'),
            'tecnique' => $errors->get('tecnique'),
            'materials' => $errors->get('materials'),
            'review' => $errors->get('review'),
        ]);

        throw new ValidationException($validator, $response);
    }
}