<?php

namespace MageritFree\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImpactoFormRequest extends FormRequest
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
		
      
        'valor'=>'required|max:100',
	'activo_idactivo'=>'required|max:255',
	'amenaza_idamenaza'=>'required|max:45',
        'valoracion_idvaloreacion'=>'required|max:45',
        
        ];
    }
}
