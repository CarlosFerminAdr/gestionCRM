@extends('layouts.app')
@section('content')
    <form action="{{route('clientes.store')}}" method="POST">
        @csrf
        @include('cliente.form',['modo'=>'Agregar'])
    </form>
@endsection