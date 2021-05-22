@if(Session::has('mensaje'))
    <strong>{{Session::get('mensaje')}}</strong>
@endif
<h1>LISTADO DE USUARIOS</h1>
<hr>
<a href="{{route('usuarios.create')}}">Agregar Usuario</a><br><br>
<table>
    <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Usuario</th>
        <th colspan="2" >Operaciones</th>
    </thead>
    <tbody>
        @foreach ($usuarios as $u)
            <tr>
                <td>{{$u->id}}</td>
                <td><a href="{{route('usuarios.show',$u)}}">{{$u->nombre}}</a></td>
                <td>{{$u->user}}</td>
                <td><a href="{{route('usuarios.edit',$u)}}">Editar</a></td>
                <td>
                    <form action="{{route('usuarios.destroy',$u)}}" method="POST">
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
{{$usuarios->links()}}