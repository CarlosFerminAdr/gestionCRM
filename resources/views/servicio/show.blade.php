<h1>CONSULTAR SERVICIO</h1>
<hr>
<h2>Codigo: {{$servicio->id}}</h2>
<h2>Fecha y Hora: {{$servicio->fecha_hora}}</h2>
<h2>Cliente: {{$servicio->cliente->nombre}} {{$servicio->cliente->a_paterno}} {{$servicio->cliente->a_materno}}</h2>
<h2>Producto: {{$servicio->producto->nombre}}</h2>

<img src="{{asset('storage').'/'.$servicio->producto->foto}}" 
alt="{{asset('storage').'/'.$servicio->producto->foto}}" width="200px" height="200px">

<h2>Tipo de Servicio: {{$servicio->producto->categoria->tipo}} - {{$servicio->producto->categoria->descripcion}}</h2>
<h2>Precio del Producto: ${{$servicio->producto->precio}}.00</h2>

<h2>Cantidad de compra: {{$servicio->cantidad}} piezas</h2>
<h2>Costo Total: ${{$servicio->producto->precio * $servicio->cantidad}}.00</h2>

<hr>
<a href="{{route('servicios.index')}}">Regresar</a>