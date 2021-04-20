<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJugador extends FormRequest
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
            'nombresJugador'=> 'required',
            'apellidoPaternoJugador'=>'required',
            'nacimientoJugador'=>'required',
            // 'fotoJugador'=>'image|max:2048',
            'piernaHabil'=>'required',
            'posicion'=>'required',
            "emailJugador"=>'required',
            "telefonoJugador"=>'required',
            "passwordJugador"=>'required'
        ];
    }
}
