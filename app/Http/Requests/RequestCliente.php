<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestCliente extends FormRequest
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
            'nombre' => 'required|min:3|max:25',
            'a_paterno' => 'required|min:3|max:25',
            'a_materno' => 'required|min:3|max:25',
            'telefono' => 'required|min:3|max:25',
            'direccion' => 'required|min:3|max:25',
            'genero_id' => 'required'
        ];
    }

    public function attributes(){
        return [
            'nombre' => 'Nombre del Cliente',
            'a_paterno' => 'Apellido Paterno',
            'a_materno' => 'Apellido Materno',
            'telefono' => 'Número Telefónico',
            'direccion' => 'Dirección',
            'genero_id' => 'Sexo del Cliente'
        ];
    }
}
