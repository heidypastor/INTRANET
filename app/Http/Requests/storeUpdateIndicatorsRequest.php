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
            'IndQueMide'     =>  'max:255|min:1',
            'IndGraphic'     =>  'max:2048|min:1|mimes:jpeg,jpg,png',
            'IndTable'       =>  'max:2048|min:1|mimes:pdf,txt,doc,docx,xls,ppt,xlsx,pptx',
            'IndAnalysis'    =>  'max:2048|min:1|mimes:jpeg,jpg,png',
            'IndMeta'        =>  'max:20',
        ];
    }

    public function messages()
    {
        return [
            'IndName.max'      => 'El campo Nombre no debe contener más de 120 caracteres',
            'IndName.min'      => 'El campo Nombre no debe contener menos de 1 caracter',
            'IndObjective.max' => 'El campo Objetivo no debe ser diferente a los objetivos disponibles en el formulario',
            'IndObjective.min' => 'El campo Objetivo no debe ser diferente a los objetivos disponibles en el formulario',
            'IndQueMide.max'   => 'El campo "N° de ficha" no debe contener más de 255 caracteres',
            'IndQueMide.min'   => 'El campo "N° de ficha" no debe contener menos de 1 caracter',
            'IndGraphic.mimes' => 'LA "Gráfica" debe ser de tipo: jpeg,jpg,png',
            'IndTable.mimes'   => 'El "Archivo" debe ser de tipo: pdf,txt,doc,docx,xls,ppt,xlsx,pptx',
            'IndAnalysis.mimes' => 'El "Análisis (imagen)" debe ser de tipo: jpeg,jpg,png',
            'IndGraphic.max'    => 'LA "Gráfica" debe pesar menos de 2 Mb',
            'IndTable.max'      => 'El "Archivo" debe pesar menos de 2 Mb',
            'IndAnalysis.max'   => 'El "Análisis (imagen)" debe pesar menos de 2 Mb',
            'IndMeta.max'      => 'El campo Nombre no debe contener más de 20 caracteres',
        ];
    }
}
