@extends('layouts.app')
@section('content')
    <form action="{{route('categorias.store')}}" method="POST">
        @csrf
        @include('categoria.form',['modo'=>'Agregar'])
    </form>
@endsection