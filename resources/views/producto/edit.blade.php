@extends('layouts.app')
@section('content')
    <form action="{{route('productos.update',$producto)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('producto.form',['modo'=>'Editar'])
    </form>
@endsection