<h1>CONSULTAR CLIENTE</h1>
<hr>
<h1>Nombre: {{$cliente->nombre}}</h1>
<h1>Apellido Paterno: {{$cliente->a_paterno}}</h1>
<h1>Apellido Materno: {{$cliente->a_materno}}</h1>
<h1>Sexo: {{$cliente->sexo}}</h1>
<h1>Teléfono: {{$cliente->telefono}}</h1>
<h1>Dirección: {{$cliente->direccion}}</h1>
<hr>
<a href="{{route('clientes.index')}}">Regresar</a>