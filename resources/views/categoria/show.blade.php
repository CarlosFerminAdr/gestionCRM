<h1>CONSULTAR CATEGORIA</h1>
<hr>
<h1>Categoria: {{$categoria->tipo}}</h1>
<h1>Descripción: {{$categoria->descripcion}}</h1>
<hr>
<h1>PRODUCTOS DE ESTA CATEGORIA</h1>
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