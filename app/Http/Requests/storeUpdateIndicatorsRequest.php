<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Indicators;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class storeUpdateIndicatorsRequest extends FormRequest
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
            'IndName'        =>  'max:120|min:1',
            'IndObjective'   =>  'max:10|min:1',
            'IndQueMide'     =>  'max:512|min:1',
            'IndGraphic'     =>  'max:2048|min:1|mimes:jpeg,jpg,png',
            'IndTable'       =>  'max:2048|min:1|mimes:pdf,txt,doc,docx,xls,ppt,xlsx,pptx',
            'IndAnalysis'    =>  'max:512|min:1',
            'IndEfe'         =>  'max:512|min:1',
            // 'IndDateFrom'    =>  'max:512|min:1',
            // 'IndDateUntil'   =>  'max:512|min:1',
        ];
    }

    public function messages()
    {
        return [
            'IndName.max'      => 'El campo Nombre no debe contener más de 120 caracteres',
            'IndName.min'      => 'El campo Nombre no debe contener menos de 1 caracter',
            'IndObjective.max' => 'El campo Objetivo no debe ser diferente a los objetivos registrados',
            'IndObjective.min' => 'El campo Objetivo no debe ser diferente a los objetivos registrados',
            'IndQueMide.max'   => 'El campo Que Mide no debe contener más de 512 caracteres',
            'IndQueMide.min'   => 'El campo Que Mide no debe contener menos de 1 caracter',
            'IndGraphic.mimes' => 'El Archivo debe ser de tipo: jpeg,jpg,png',
            'IndTable.mimes'   => 'El Archivo debe ser de tipo: pdf,txt,doc,docx,xls,ppt,xlsx,pptx',
            'IndAnalysis.max'  => 'El campo Analisis no debe contener más de 512 caracteres',
            'IndAnalysis.min'  => 'El campo Analisis no debe contener menos de 1 caracter',
            'IndEfe.max'       => 'El campo Analisis no debe contener más de 512 caracteres', 
            'IndEfe.min'       => 'El campo Analisis no debe contener menos de 1 caracter', 
        ];
    }
}
