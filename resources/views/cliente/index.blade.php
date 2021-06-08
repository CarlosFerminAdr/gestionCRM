@extends('layouts.app')
@section('content')
    <div class="container">
        @if(Session::has('mensaje'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{Session::get('mensaje')}}</strong>
                <button type="button"class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        
        <h1><strong>LISTADO DE CLIENTES</strong></h1>
        <hr>
        <a class="btn btn-primary float-right" href="{{route('clientes.create')}}"><i class="bi bi-plus-lg"></i> Agregar</a><br><br>
        <table class="table table-hover">
            <thead class="thead-dark">
                <th>Id</th>
                <th>Nombre</th>
                <th>Sexo</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th colspan="2" >Operaciones</th>
            </thead>
            <tbody>
                @foreach ($clientes as $c)
                    <tr>
                        <td>{{$c->id}}</td>
                        <td><a href="{{route('clientes.show',$c)}}">
                        {{$c->nombre}} {{$c->a_paterno}} {{$c->a_materno}}</a></td>
                        <td>{{$c->sexo}}</td>
                        <td>{{$c->telefono}}</td>
                        <td>{{$c->direccion}}</td>
                        <td><a class="btn btn-warning" href="{{route('clientes.edit',$c)}}">
                        <i class="bi bi-check-lg"></i></a></td>
                        <td>
                            <form action="{{route('clientes.destroy',$c)}}" method="POST">
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
        {{$clientes->links()}}
    </div>
@endsection