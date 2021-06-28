<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestServicio;
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
        /*
        $servicios = Servicio::paginate(10);
        return view('servicio.index',compact('servicios'));
        */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*
        $clientes = Cliente::all();
        $productos = Producto::all();
        return view('servicio.create',compact('clientes','productos'));
        */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestServicio $request)
    {
        /*
        Servicio::create($request->all());
        return redirect('servicios')->with('mensaje','Servicio agregado con exito!!');
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show(Servicio $servicio)
    {
        /*
        return view('servicio.show',compact('servicio'));
        */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicio $servicio)
    {
        /*
        $clientes = Cliente::all();
        $productos = Producto::all();
        return view('servicio.edit',compact('servicio','clientes','productos'));
        */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(RequestServicio $request, Servicio $servicio)
    {
        /*
        $datos = request()->except(['_token','_method']);
        Servicio::find($servicio->id)->update($datos);
        return redirect('servicios')->with('mensaje','Servicio actualizado con exito!!');
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicio $servicio)
    {
        /*
        $servicio->delete();
        return redirect('servicios')->with('mensaje','Servicio eliminado con exito!!');
        */
    }
}
