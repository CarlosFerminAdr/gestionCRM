@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center"><strong>Consultar Producto</strong></h1>
        <hr>
        <div class="row">
            <div class="col-sm-6 offset-3">
                <div class="card">
                    <div class="card-header text-center" style="background-color: black;">
                        <strong style="color:white">Detalles del Producto</strong>
                    </div>
                    <div class="card-body" style="background-color: Darkred;">

                        <h4><strong style="color:white">Producto: </strong></h4>
                        <div class="list-group" align="center">
                            <h2 class="list-group-item" style="background-color: Darkred;">
                                <img class="img-thumbnail img-fluid" width="250px" height="250px" 
                                src="{{asset('storage').'/'.$producto->foto}}" alt="{{asset('storage').'/'.$producto->foto}}">
                            </h2>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                            <h4><strong style="color:white">Nombre: </strong></h4>
                                <h4 class="form-control">{{$producto->nombre}}</h4>
                            </div>
                            <div class="col-sm-5">
                            <h4><strong style="color:white">Marca: </strong></h4>
                                <h4 class="form-control">{{$producto->marca}}</h4>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                            <h4><strong style="color:white">Cantidad: </strong></h4>
                                <h4 class="form-control">{{$producto->stock}} piezas</h4>
                            </div>
                            <div class="col-sm-6">
                            <h4><strong style="color:white">Precio: </strong></h4>
                                <h4 class="form-control">$ {{$producto->precio}}.00</h4>
                            </div>
                        </div>
                        <br>
                        <h4><strong style="color:white">Categoria: </strong></h4>
                            <h4 class="form-control">{{$producto->categoria->tipo}} ({{$producto->categoria->descripcion}}).</h4>
                    </div>
                </div>

                <a class="btn btn-dark float-right mt-4" href="{{route('productos.index')}}">
                <i class="bi bi-arrow-return-left"></i> Atras</a>
            </div>
        </div>
    </div>
@endsection