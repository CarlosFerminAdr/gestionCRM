<h1>{{$categoria->tipo}}</h1>
<h1>{{$categoria->descripcion}}</h1>
<hr>
<ul>
    @foreach ($categoria->productos as $p)
        <li>{{$p->id." - ".$p->nombre." - ".$p->marca." - ".$p->stock." - ".$p->precio}}</li>
    @endforeach
</ul>
<hr>
<a href="{{route('categorias.index')}}">Regresar</a>
<br>
<a href="{{route('productos.index')}}">ir a productos</a>