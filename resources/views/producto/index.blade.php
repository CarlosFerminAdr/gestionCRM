<div>
    @if(Session::has('mensaje'))
        <strong>{{Session::get('mensaje')}}</strong>
    @endif
</div>
<h1>LISTADO DE PRODUCTOS</h1>
<hr>
<a href="{{route('productos.create')}}">Agregar Producto</a><br><br>
<table>
    <thead>
        <th>Id</th>
        <th>Imagen</th>
        <th>Producto</th>
        <th>Marca</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Categoria</th>
        <th colspan="2" >Operaciones</th>
    </thead>
    <tbody>
        @foreach ($productos as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->foto}}</td>
                <td><a href="{{route('productos.show',$p)}}">{{$p->nombre}}</a></td>
                <td>{{$p->marca}}</td>
                <td>{{$p->stock}}</td>
                <td>{{$p->precio}}</td>
                <td><a href="{{route('categorias.show',$p->categoria)}}">{{$p->categoria->tipo}}</td>
                <td><a href="{{route('productos.edit',$p)}}">Editar</a></td>
                <td>
                    <form action="{{route('productos.destroy',$p)}}" method="POST">
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
{{$productos->links()}}