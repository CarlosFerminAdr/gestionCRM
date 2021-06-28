<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Cliente;
use App\Models\producto_servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductoServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $now = Carbon::now();
        $fecha = $now->format('d/m/Y');
        $hora = $now->format('h:i A');

        $productos = Producto::all();
        $categorias = Categoria::all();
        $clientes = Cliente::all();
        return view('proservicio.index',compact('productos','categorias','clientes','fecha','hora'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            DB::beginTransaction();
            $servicio = Servicio::create($request->all());
            foreach ($request->producto_id as $key => $value){
                $servicio->productos()->attach($value,['cantidad'=>$request['cantidades'][$key]]);
                $producto = Producto::find($value);
                $producto->stock = $producto->stock - $request['cantidades'][$key];
                $producto->save();
            }
            DB::commit();
            return redirect('proservicio')->with('mensaje','Servicio de Compra realizada con exito!!');
        }catch(\Exception $e){
            DB::rollBack();
            return redirect('proservicio')->with('mensaje','Transaccion no valida intentelo de nuevo!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\producto_servicio  $producto_servicio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productos = [];
        if (isset($id)){
            if ($id>0){
                $productos = Producto::select("productos.*","producto_servicio.cantidad")
                ->join("producto_servicio","productos.id","=","producto_servicio.producto_id")
                ->Where("producto_servicio.servicio_id",$id)
                ->get();
            }
        }

        $servicios = Servicio::paginate(5);
        return view('proservicio.show',compact('servicios','productos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\producto_servicio  $producto_servicio
     * @return \Illuminate\Http\Response
     */
    public function edit(producto_servicio $producto_servicio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\producto_servicio  $producto_servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, producto_servicio $producto_servicio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\producto_servicio  $producto_servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            DB::beginTransaction();
            if ($id>0){
                producto_servicio::where("servicio_id", $id)->delete();
                Servicio::findOrFail($id)->delete();
            }else{
                return redirect('proservicio/0')->with('mensaje','Seleccione el regrito a eliminar!!');
            }
            DB::commit();
            return redirect('proservicio/0')->with('mensaje','Registro de venta eliminado con exito!!');
        }catch(\Exception $e){
            DB::rollBack();
            return redirect('proservicio/0')->with('mensaje','Seleccione el regrito a eliminar!!');
        }

    }
}
