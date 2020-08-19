<?php

namespace MageritFree\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InformacionFormRequest extends FormRequest
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
			'propietario'=>'max:45',
			'organizacion'=>'max:45',
			'version'=>'max:45',
			
        ];
    }
}
