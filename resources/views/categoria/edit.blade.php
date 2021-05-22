<h1>EDITAR CATEGORIA</h1>
<hr>
<form action="{{route('categorias.update',$categoria)}}" method="POST">
    @csrf
    @method('PUT')
    @include('categoria.form',['modo'=>'Editar'])
</form>
<a href="{{route('categorias.index')}}">Regresar</a>