<h1>CONSULTAR PRODUCTO</h1>
<hr>
<h2>Producto:</h2>
<img src="{{asset('storage').'/'.$producto->foto}}" 
alt="{{asset('storage').'/'.$producto->foto}}" width="200px" height="200px">
<br>
<h2>Nombre: {{$producto->nombre}}</h2>
<h2>Marca: {{$producto->marca}}</h2>
<h2>Cantidad: {{$producto->stock}}</h2>
<h2>Precio: $ {{$producto->precio}}.00</h2>
<h2>Categoria: {{$producto->categoria->tipo}} - {{$producto->categoria->descripcion}}</h2>
<hr>
<a href="{{route('productos.index')}}">Regresar</a>