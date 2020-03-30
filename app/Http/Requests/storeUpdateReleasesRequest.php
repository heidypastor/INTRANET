<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Releases;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class storeUpdateReleasesRequest extends FormRequest
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
            'RelName'     =>  'max:120|min:1',
            'RelMessage'  =>  'max:512|min:1',
            'RelSrc'      =>  'max:512|min:1|mimes:jpeg,jpg,png',
            'RelType'     =>  'max:512|min:1',
            'RelGeneral'  =>  'integer',
        ];
    }


    public function messages()
    {
        return [
            'RelName.max'    => 'El campo Nombre no debe contener más de 120 caracteres',
            'RelName.min'    => 'El campo Nombre no debe contener menos de 1 caracter',
            'RelMessage.max' => 'El campo Objetivo no debe contener más de 512 caracteres',
            'RelMessage.min' => 'El campo Objetivo no debe contener menos de 1 caracter',
            'RelSrc.mimes'   => 'El Archivo debe ser de tipo: jpeg,jpg,png',
            'RelType.max'    => 'El campo Analisis no debe contener más de 512 caracteres',
            'RelType.min'    => 'El campo Analisis no debe contener menos de 1 caracter', 
        ];
    }
}
