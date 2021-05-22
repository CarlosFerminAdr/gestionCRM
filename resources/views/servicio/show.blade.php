<h1>{{$servicio->codigo}}</h1>
<h1>{{$servicio->fecha_inicio}}</h1>
<h1>{{$servicio->fecha_fin}}</h1>
<h1>{{$servicio->costo_servicio}}</h1>

<h1>{{$servicio->cliente->nombre}}</h1>
<h1>{{$servicio->producto->nombre}}</h1>
<hr>
<a href="{{route('servicios.index')}}">Regresar</a>