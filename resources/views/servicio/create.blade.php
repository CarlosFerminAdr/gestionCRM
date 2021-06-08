@extends('layouts.app')
@section('content')
    <form action="{{route('servicios.store')}}" method="POST">
        @csrf
        @include('servicio.form',['modo'=>'Agregar'])
    </form>
    <a href="{{route('servicios.index')}}">Regresar</a>
@endsection