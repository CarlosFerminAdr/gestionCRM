@extends('layouts.app')
@section('content')
    <form action="{{route('servicios.update',$servicio)}}" method="POST">
        @csrf
        @method('PUT')
        @include('servicio.form',['modo'=>'Editar'])
    </form>
    <a href="{{route('servicios.index')}}">Regresar</a>
@endsection