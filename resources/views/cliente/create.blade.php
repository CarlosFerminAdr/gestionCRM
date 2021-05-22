<h1>AGREGAR CLIENTES</h1>
<hr>
<form action="{{route('clientes.store')}}" method="POST">
    @csrf
    @include('cliente.form',['modo'=>'Agregar'])
</form>
<a href="{{route('clientes.index')}}">Regresar</a>