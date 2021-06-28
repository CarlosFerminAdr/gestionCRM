<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestServicio extends FormRequest
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
            'fecha' => 'required',
            'hora' => 'required',
            'cantidad' => 'required|min:1|max:5',
            'cliente_id' => 'required',
            'producto_id' => 'required'
        ];
    }

    public function attributes(){
        return [
            'fecha' => 'Fecha',
            'hora' => 'Hora',
            'cantidad' => 'Cantidad de Productos',
            'cliente_id' => 'Nombre del Cliente',
            'producto_id' => 'Producto o Servicio'
        ];
    }
}
