<?php

namespace MageritFree\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EficaciasobreimpactoFormRequest extends FormRequest
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
            'eficacia'=>'required|max:50',
            'salvaguarda_idsalvaguarda'=>'required|max:45',
	 
			
			
        ];
    }
}
