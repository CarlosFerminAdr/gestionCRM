@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center"><strong>Consultar Categoria</strong></h1>
        <hr>
        <div class="row">
            <div class="col-sm-6 offset-3">
                <div class="list-group">
                    <h2 class="list-group-item"><strong>Producto:</strong></h2>
                        <div align="center">
                            <h2 class="list-group-item">
                                <img class="img-thumbnail img-fluid" width="250px" height="250px" 
                                src="{{asset('storage').'/'.$producto->foto}}" alt="{{asset('storage').'/'.$producto->foto}}">
                            </h2>
                        </div>
                    <h2 class="list-group-item"><strong>Nombre: </strong>{{$producto->nombre}}</h2>
                    <h2 class="list-group-item"><strong>Marca: </strong>{{$producto->marca}}</h2>
                    <h2 class="list-group-item"><strong>Cantidad: </strong>{{$producto->stock}} piezas</h2>
                    <h2 class="list-group-item"><strong>Precio: </strong>$ {{$producto->precio}}.00</h2>
                    <h2 class="list-group-item"><strong>Categoria: </strong>{{$producto->categoria->tipo}} - {{$producto->categoria->descripcion}}</h2>
                </div>
                <a class="btn btn-dark float-right mt-4" href="{{route('productos.index')}}">
                <i class="bi bi-arrow-return-left"></i> Atras</a>
            </div>
        </div>
    </div>
@endsection