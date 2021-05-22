<h1>EDITAR SERVICIO</h1>
<hr>
<form action="{{route('servicios.update',$servicio)}}" method="POST">
    @csrf
    @method('PUT')
    @include('servicio.form',['modo'=>'Editar'])
</form>
<a href="{{route('servicios.index')}}">Regresar</a>