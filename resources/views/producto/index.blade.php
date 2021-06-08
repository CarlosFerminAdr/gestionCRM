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
        
        <h1 class="text-center"><strong>LISTADO DE PRODUCTOS</strong></h1>
        <hr>
        <a class="btn btn-primary float-right" href="{{route('productos.create')}}"><i class="bi bi-plus-lg"></i> Agregar</a><br><br>
        <table class="table table-hover">
            <thead class="thead-dark">
                <th>Id</th>
                <th>Imagen</th>
                <th>Producto/Servicio</th>
                <th>Marca/Asunto</th>
                <th>Categoria</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th colspan="2" >Operaciones</th>
            </thead>
            <tbody>
                @foreach ($productos as $p)
                    <tr>
                        <td>{{$p->id}}</td>
                        <td><img class="img-thumbnail img-fluid" width="90px" height="90px" 
                        src="{{asset('storage').'/'.$p->foto}}" alt="{{asset('storage').'/'.$p->foto}}"></td>
                        <td><a href="{{route('productos.show',$p)}}">{{$p->nombre}}</a></td>
                        <td>{{$p->marca}}</td>
                        <td><a href="{{route('categorias.show',$p->categoria)}}">{{$p->categoria->tipo}}</td>
                        <td>{{$p->stock}} piezas</td>
                        <td>${{$p->precio}}.00</td>
                        <td><a class="btn btn-warning" href="{{route('productos.edit',$p)}}">
                        <i class="bi bi-check-lg"></i></a></td>
                        <td>
                            <form action="{{route('productos.destroy',$p)}}" method="POST">
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
        {{$productos->links()}}
    </div>
@endsection