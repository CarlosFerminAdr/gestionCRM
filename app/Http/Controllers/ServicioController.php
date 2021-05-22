<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use App\Models\Cliente;
use App\Models\Producto;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = Servicio::paginate(10);
        return view('servicio.index',compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Cliente::all();
        $productos = Producto::all();
        return view('servicio.create',compact('clientes','productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servicio = new Servicio();
        $servicio->codigo = $request->codigo;
        $servicio->fecha_inicio = $request->fecha_inicio;
        $servicio->fecha_fin = $request->fecha_fin;
        $servicio->costo_servicio = $request->costo_servicio;
        $servicio->cliente_id = $request->cliente_id;
        $servicio->producto_id = $request->producto_id;
        $servicio->save();
        return redirect('servicios')->with('mensaje','Servicio agregado con exito!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show(Servicio $servicio)
    {
        return view('servicio.show',compact('servicio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicio $servicio)
    {
        $clientes = Cliente::all();
        $productos = Producto::all();
        return view('servicio.edit',compact('servicio','clientes','productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicio $servicio)
    {
        $servicio->codigo = $request->codigo;
        $servicio->fecha_inicio = $request->fecha_inicio;
        $servicio->fecha_fin = $request->fecha_fin;
        $servicio->costo_servicio = $request->costo_servicio;
        $servicio->cliente_id = $request->cliente_id;
        $servicio->producto_id = $request->producto_id;
        $servicio->save();
        return redirect('servicios')->with('mensaje','Servicio actualizado con exito!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicio $servicio)
    {
        $servicio->delete();
        return redirect('servicios')->with('mensaje','Servicio eliminado con exito!!');
    }
}
