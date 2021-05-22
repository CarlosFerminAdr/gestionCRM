<h1>AGREGAR CATEGORIA</h1>
<hr>
<form action="{{route('categorias.store')}}" method="POST">
    @csrf
    @include('categoria.form',['modo'=>'Agregar'])
</form>
<a href="{{route('categorias.index')}}">Regresar</a>