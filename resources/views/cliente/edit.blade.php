@extends('layouts.app')
@section('content')
    <form action="{{route('clientes.update',$cliente)}}" method="POST">
        @csrf
        @method('PUT')
        @include('cliente.form',['modo'=>'Editar'])
    </form>
@endsection