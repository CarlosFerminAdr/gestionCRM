<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::paginate(10);
        return view('usuario.index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
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
            'nombre' => 'required|min:3|max:30',
            'user' => 'required|min:3|max:25',
            'password' => 'required|min:3|max:25'
        ]);
        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->user = $request->user;
        $usuario->password = $request->password;
        $usuario->save();
        return redirect('usuarios')->with('mensaje','Usuario agregado con exito!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        return view('usuario.show',compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        return view('usuario.edit',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'nombre' => 'required|min:3|max:30',
            'user' => 'required|min:3|max:25',
            'password' => 'required|min:3|max:25'
        ]);
        $usuario->nombre = $request->nombre;
        $usuario->user = $request->user;
        $usuario->password = $request->password;
        $usuario->save();
        return redirect('usuarios')->with('mensaje','Usuario actualizado con exito!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect('usuarios')->with('mensaje','Usuario eliminado con exito!!');
    }
}
