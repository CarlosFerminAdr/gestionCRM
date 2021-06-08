@extends('layouts.app')
@section('content')
    <form action="{{route('categorias.update',$categoria)}}" method="POST">
        @csrf
        @method('PUT')
        @include('categoria.form',['modo'=>'Editar'])
    </form>
@endsection