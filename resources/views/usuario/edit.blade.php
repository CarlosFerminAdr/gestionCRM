<h1>EDITAR USUARIO</h1>
<hr>
<form action="{{route('usuarios.update',$usuario)}}" method="POST">
    @csrf
    @method('PUT')
    @include('usuario.form',['modo'=>'Editar'])
</form>
<a href="{{route('usuarios.index')}}">Regresar</a>