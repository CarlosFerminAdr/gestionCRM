<h1>AGREGAR USUARIO</h1>
<hr>
<form action="{{route('usuarios.store')}}" method="POST">
    @csrf
    @include('usuario.form',['modo'=>'Agregar'])
</form>
<a href="{{route('usuarios.index')}}">Regresar</a>