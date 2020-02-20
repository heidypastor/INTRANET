<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CambiodefechaRequest extends FormRequest
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
            'Event' => 'date|after:today',
        ];
    }
    public function messages()
    {
        return [
            'Event.after' => 'Solo puede programar una alerta apartir del dia de mañana',
        ];
    }
}
