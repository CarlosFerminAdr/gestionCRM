<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestProducto extends FormRequest
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
            'foto' => 'required|max:10000|mimes:jpg,png,jpeg',
            'nombre' => 'required|min:3|max:20',
            'marca' => 'required|min:3|max:50',
            'stock' => 'required|min:1|max:4',
            'precio' => 'required|min:1|max:4',
            'categoria_id' => 'required'
        ];
    }

    public function attributes(){
        return [
            'nombre' => 'Producto o Sevicio',
            'marca' => 'Marca del Producto',
            'stock' => 'Cantidad del Prodcuto',
            'precio' => 'Costo del Producto',
            'categoria_id' => 'Categoria del Producto'
        ];
    }

    public function messages(){
        return [
            'foto.required' => 'Agrega una Imagen del Prodcuto'
        ];
    }
}
