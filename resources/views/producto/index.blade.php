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
        <th>Producto/Servicio</th>
        <th>Marca/Asunto</th>
        <th>Categoria</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th colspan="2" >Operaciones</th>
    </thead>
    <tbody>
        @foreach ($productos as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td><img src="{{asset('storage').'/'.$p->foto}}" 
                alt="{{asset('storage').'/'.$p->foto}}" width="100px" height="100px"></td>
                <td><a href="{{route('productos.show',$p)}}">{{$p->nombre}}</a></td>
                <td>{{$p->marca}}</td>
                <td><a href="{{route('categorias.show',$p->categoria)}}">{{$p->categoria->tipo}}</td>
                <td>{{$p->stock}}</td>
                <td>{{$p->precio}}</td>
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