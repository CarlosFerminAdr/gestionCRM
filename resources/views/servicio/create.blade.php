<h1>AGREGAR SERVICIO</h1>
<hr>
<form action="{{route('servicios.store')}}" method="POST">
    @csrf
    @include('servicio.form',['modo'=>'Agregar'])
</form>
<a href="{{route('servicios.index')}}">Regresar</a>