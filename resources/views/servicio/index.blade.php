<div>
    @if(Session::has('mensaje'))
        <strong>{{Session::get('mensaje')}}</strong>
    @endif
</div>
<h1>LISTADO DE SERVICIOS</h1>
<hr>
<a href="{{route('servicios.create')}}">Agregar Servicio</a><br><br>
<table>
    <thead>
        <th>Codigo</th>
        <th>Fecha y Hora</th>
        <th>Cliente</th>
        <th>Producto</th>
        <th>Tipo de Servicio</th>
        <th>Costo Unitario</th>
        <th>Cantidad</th>
        <th>Costo Total</th>
        <th colspan="2" >Operaciones</th>
    </thead>
    <tbody>
        @foreach ($servicios as $s)
            <tr>
                <td><a href="{{route('servicios.show',$s)}}">{{$s->id}}</a></td>
                <td>{{$s->fecha_hora}}</td>
                <th><a href="{{route('clientes.show',$s->cliente)}}">{{$s->cliente->nombre}}</th>
                <th><a href="{{route('productos.show',$s->producto)}}">{{$s->producto->nombre}}</th>
                <th><a href="{{route('categorias.show',$s->producto)}}">{{$s->producto->categoria->tipo}}</th>
                <th>${{$s->producto->precio}}.00</th>
                <td>{{$s->cantidad}} piezas</td>
                <td>${{$s->producto->precio * $s->cantidad}}.00</td>
                <td><a href="{{route('servicios.edit',$s)}}">Editar</a></td>
                <td>
                    <form action="{{route('servicios.destroy',$s)}}" method="POST">
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
{{$servicios->links()}}