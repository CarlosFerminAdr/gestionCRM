<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestProducto;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::paginate(3);
        return view('producto.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('producto.create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestProducto $request)
    {
        $datos = request()->except('_token');
        if ($request->hasFile('foto')){
            $datos['foto'] = $request->file('foto')->store('uploads','public');
        }
        Producto::insert($datos);
        return redirect('productos')->with('mensaje','Producto agregado con exito!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return view('producto.show',compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        $categorias = Categoria::all();
        return view('producto.edit',compact('producto','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(RequestProducto $request, Producto $producto)
    {
        $datos = request()->except(['_token','_method']);
        if ($request->hasFile('foto')){
            Storage::delete('public/',$producto->id);
            $datos['foto'] = $request->file('foto')->store('uploads','public');
        }
        Producto::where('id','=',$producto->id)->update($datos);
        return redirect('productos')->with('mensaje','Producto actualizado con exito!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect('productos')->with('mensaje','Producto eliminado con exito!!');
    }
}
