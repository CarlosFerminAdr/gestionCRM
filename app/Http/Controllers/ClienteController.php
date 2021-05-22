<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::paginate(10);
        return view('cliente.index',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;
        $request->validate([
            'nombre' => 'required|min:3|max:25',
            'a_paterno' => 'required|min:3|max:25',
            'a_materno' => 'required|min:3|max:25',
            'sexo' => 'required|min:3|max:25',
            'telefono' => 'required|min:3|max:25',
            'direccion' => 'required|min:3|max:25'
        ]);
        $cliente = new Cliente();
        $cliente->nombre = $request->nombre;
        $cliente->a_paterno = $request->a_paterno;
        $cliente->a_materno = $request->a_materno;
        $cliente->sexo = $request->sexo;
        $cliente->telefono = $request->telefono;
        $cliente->direccion = $request->direccion;
        $cliente->save();
        return redirect('clientes')->with('mensaje','Cliente agregado con exito!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        return view('cliente.show',compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        return view('cliente.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nombre' => 'required|min:3|max:25',
            'a_paterno' => 'required|min:3|max:25',
            'a_materno' => 'required|min:3|max:25',
            'sexo' => 'required|min:3|max:25',
            'telefono' => 'required|min:3|max:25',
            'direccion' => 'required|min:3|max:25'
        ]);
        $cliente->nombre = $request->nombre;
        $cliente->a_paterno = $request->a_paterno;
        $cliente->a_materno = $request->a_materno;
        $cliente->sexo = $request->sexo;
        $cliente->telefono = $request->telefono;
        $cliente->direccion = $request->direccion;
        $cliente->save();
        return redirect('clientes')->with('mensaje','Cliente actualizado con exito!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect('clientes')->with('mensaje','Cliente eliminado con exito!!');
    }
}
