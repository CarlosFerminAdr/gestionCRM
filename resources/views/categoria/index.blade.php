@if(Session::has('mensaje'))
    <strong>{{Session::get('mensaje')}}</strong>
@endif
<h1>LISTADO DE CATEGORIAS</h1>
<hr>
<a href="{{route('categorias.create')}}">Agregar Categoria</a><br><br>
<table>
    <thead>
        <th>Id</th>
        <th>Categoria</th>
        <th>Descripcion</th>
        <th colspan="2" >Operaciones</th>
    </thead>
    <tbody>
        @foreach ($categorias as $c)
            <tr>
                <td>{{$c->id}}</td>
                <td><a href="{{route('categorias.show',$c)}}">{{$c->tipo}}</a></td>
                <td>{{$c->descripcion}}</td>
                <td><a href="{{route('categorias.edit',$c)}}">Editar</a></td>
                <td>
                    <form action="{{route('categorias.destroy',$c)}}" method="POST">
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
{{$categorias->links()}}