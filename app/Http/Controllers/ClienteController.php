<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestCliente;
use App\Models\Genero;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::paginate(2);
        return view('cliente.index',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $generos = Genero::all();
        return view('cliente.create',compact('generos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestCliente $request)
    {
        Cliente::create($request->all());
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
        $generos = Genero::all();
        return view('cliente.edit',compact('cliente','generos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(RequestCliente $request, Cliente $cliente)
    {
        $datos = request()->except(['_token','_method']);
        Cliente::find($cliente->id)->update($datos);
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
        try{
            DB::beginTransaction();
                $cliente->delete();
            DB::commit();
                return redirect('clientes')->with('mensaje','Cliente eliminado con exito!!');
        }catch(\Exception $e){
            DB::rollBack();
                return redirect('clientes')->with('mensaje','No se puede eliminal el Cliente, por las Reglas de Integridad Referencial!');
        }
    }
}
