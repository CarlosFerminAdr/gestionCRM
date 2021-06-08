@extends('layouts.app')
@section('content')
    <div>
        @if(Session::has('mensaje'))
            <strong>{{Session::get('mensaje')}}</strong>
        @endif
    </div>
    <div class="container">
        <h1>LISTADO DE SERVICIOS</h1>
        <hr>
        <a class="btn btn-primary" href="{{route('servicios.create')}}"><i class="bi bi-plus-lg"></i> Agregar</a><br><br>
        <table class="table table-hover">
            <thead class="thead-dark">
                <th>Codigo</th>
                <th>Fecha y Hora</th>
                <th>Cliente</th>
                <th>Producto</th>
                <th>Tipo de Servicio</th>
                <th>Costo Unitario</th>
                <th>Cantidad</th>
                <th>Costo Total</th>
                <th colspan="2" >Operaciones</th>
            </thead>
            <tbody>
                @foreach ($servicios as $s)
                    <tr>
                        <td><a href="{{route('servicios.show',$s)}}">{{$s->id}}</a></td>
                        <td>{{$s->fecha_hora}}</td>
                        <th><a href="{{route('clientes.show',$s->cliente)}}">
                        {{$s->cliente->nombre}} {{$s->cliente->a_paterno}} {{$s->cliente->a_materno}}</th>
                        <th><a href="{{route('productos.show',$s->producto)}}">{{$s->producto->nombre}}</th>
                        <th><a href="{{route('categorias.show',$s->producto->categoria)}}">{{$s->producto->categoria->tipo}}</th>
                        <th>${{$s->producto->precio}}.00</th>
                        <td>{{$s->cantidad}} piezas</td>
                        <td>${{$s->producto->precio * $s->cantidad}}.00</td>
                        <td><a class="btn btn-warning" href="{{route('servicios.edit',$s)}}">
                        <i class="bi bi-check-lg"></i></a></td>
                        <td>
                            <form action="{{route('servicios.destroy',$s)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit", 
                                onclick="return confirm('¿Desea Eliminar el Registro?');">
                                <i class="bi bi-x-lg"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$servicios->links()}}
    </div>
@endsection