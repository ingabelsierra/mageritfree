<?php

namespace MageritFree\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Activo_CatalogoFormRequest extends FormRequest
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
            'codigo'=>'required|max:50',
           	'descripcion'=>'max:45',
			
			
        ];
    }
}
