@if(Session::has('mensaje'))
    <strong>{{Session::get('mensaje')}}</strong>
@endif
<h1>LISTADO DE CLIENTES</h1>
<hr>
<a href="{{route('clientes.create')}}">Agregar Cliente</a><br><br>
<table>
    <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Sexo</th>
        <th>Teléfono</th>
        <th>Dirección</th>
        <th colspan="2" >Operaciones</th>
    </thead>
    <tbody>
        @foreach ($clientes as $c)
            <tr>
                <td>{{$c->id}}</td>
                <td><a href="{{route('clientes.show',$c)}}">
                {{$c->nombre}} {{$c->a_paterno}} {{$c->a_materno}}</a></td>
                <td>{{$c->sexo}}</td>
                <td>{{$c->telefono}}</td>
                <td>{{$c->direccion}}</td>
                <td><a href="{{route('clientes.edit',$c)}}">Editar</a></td>
                <td>
                    <form action="{{route('clientes.destroy',$c)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit", onclick="return confirm('¿Desea Eliminar el Registro?');">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$clientes->links()}}