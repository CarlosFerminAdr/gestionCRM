<h1>AGREGAR PRODUCTO</h1>
<hr>
<form action="{{route('productos.store')}}" method="POST">
    @csrf
    @include('producto.form',['modo'=>'Agregar'])
</form>
<a href="{{route('productos.index')}}">Regresar</a>