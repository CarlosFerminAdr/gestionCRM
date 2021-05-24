<h1>EDITAR PRODUCTO</h1>
<hr>
<form action="{{route('productos.update',$producto)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    @include('producto.form',['modo'=>'Editar'])
</form>
<a href="{{route('productos.index')}}">Regresar</a>