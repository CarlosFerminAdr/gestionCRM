<h1>EDITAR CLIENTE</h1>
<hr>
<form action="{{route('clientes.update',$cliente)}}" method="POST">
    @csrf
    @method('PUT')
    @include('cliente.form',['modo'=>'Editar'])
</form>
<a href="{{route('clientes.index')}}">Regresar</a>