@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center"><strong>Consultar Cliente</strong></h1>
        <hr>
        <div class="row">
            <div class="col-sm-6 offset-3">
                <div class="card">
                    <div class="card-header text-center" style="background-color: black;">
                        <strong style="color:white">Datos del Cliente</strong>
                    </div>
                    <div class="card-body" style="background-color: Darkred;">
                        <h4><strong style="color:white">Nombre: </strong></h4>
                        <div class="list-group">
                            <h4 class="form-control">{{$cliente->nombre}} {{$cliente->a_paterno}} {{$cliente->a_materno}}</h4>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                            <h4><strong style="color:white">Sexo: </strong></h4>
                                <h4 class="form-control">{{$cliente->genero->sexo}}</h4>
                            </div>
                            <div class="col-sm-6">
                            <h4><strong style="color:white">Teléfono: </strong></h4>
                                <h4 class="form-control">{{$cliente->telefono}}</h4>
                            </div>
                        </div>
                        <br>

                        <h4><strong style="color:white">Dirección: </strong></h4>
                        <div class="list-group">
                            <h4 class="form-control">{{$cliente->direccion}}</h4>
                        </div>
                    </div>
                </div>
                <a class="btn btn-dark float-right mt-4" href="{{route('clientes.index')}}">
                <i class="bi bi-arrow-return-left"></i> Atras</a>
            </div>
        </div>
    </div>
@endsection