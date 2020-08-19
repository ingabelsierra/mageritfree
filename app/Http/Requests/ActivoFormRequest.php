<?php

namespace MageritFree\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivoFormRequest extends FormRequest
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
		
      
        'nombre'=>'required|max:100',
	'descripcion'=>'required|max:255',
	'propietario'=>'required|max:45',
        'iddescripcion_activo'=>'required|max:45',
        'dominio_iddominio'=>'required|max:45',
           
		
			
			
			
			
        ];
    }
}
