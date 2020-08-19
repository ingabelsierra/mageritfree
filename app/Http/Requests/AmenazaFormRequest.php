<?php

namespace MageritFree\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AmenazaFormRequest extends FormRequest
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
		
      
        'idamenaza_catalogo'=>'required|max:45',
	'descripcion'=>'required|max:255',
	'activo_idactivo'=>'required|max:45',
        'iddescripcion_amenaza'=>'required|max:45',
        		
			
			
			
			
        ];
    }
}
