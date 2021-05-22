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
        <th>Id</th>
        <th>Codigo</th>
        <th>Fecha Inicio</th>
        <th>Fecha Final</th>
        <th>Costo Servico</th>
        <th>Cliente</th>
        <th>Producto</th>
        <th colspan="2" >Operaciones</th>
    </thead>
    <tbody>
        @foreach ($servicios as $s)
            <tr>
                <td>{{$s->id}}</td>
                <td><a href="{{route('servicios.show',$s)}}">{{$s->codigo}}</a></td>
                <td>{{$s->fecha_inicio}}</td>
                <td>{{$s->fecha_fin}}</td>
                <td>{{$s->costo_servicio}}</td>
                <th><a href="{{route('clientes.show',$s->cliente)}}">{{$s->cliente->nombre}}</th>
                <th><a href="{{route('productos.show',$s->producto)}}">{{$s->producto->nombre}}</th>
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