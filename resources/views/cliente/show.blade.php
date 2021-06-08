@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center"><strong>Consultar Cliente</strong></h1>
        <hr>
        <div class="row">
            <div class="col-sm-6 offset-3">
                <div class="list-group">
                    <h2 class="list-group-item"><strong>Nombre: </strong>{{$cliente->nombre}} {{$cliente->a_paterno}} {{$cliente->a_materno}}</h2>
                    <h2 class="list-group-item"><strong>Sexo: </strong>{{$cliente->sexo}}</h2>
                    <h2 class="list-group-item"><strong>Teléfono: </strong>{{$cliente->telefono}}</h2>
                    <h2 class="list-group-item"><strong>Dirección: </strong>{{$cliente->direccion}}</h2>
                </div>
                <a class="btn btn-dark float-right mt-4" href="{{route('clientes.index')}}">
                <i class="bi bi-arrow-return-left"></i> Atras</a>
            </div>
        </div>
    </div>
@endsection