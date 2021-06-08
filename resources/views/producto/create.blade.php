@extends('layouts.app')
@section('content')
    <form action="{{route('productos.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('producto.form',['modo'=>'Agregar'])
    </form>
@endsection