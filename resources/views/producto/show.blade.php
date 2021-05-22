<img src="" alt="<-Foto">
<h1>{{$producto->nombre}}</h1>
<h1>{{$producto->marca}}</h1>
<h1>{{$producto->stock}}</h1>
<h1>{{$producto->precio}}</h1>
<h1>{{$producto->categoria->tipo}}</h1>
<hr>
<a href="{{route('productos.index')}}">Regresar</a>