<div>
    <label for="nombre">Producto/Servicio:</label>
    <input type="text" name="nombre" id="nombre" required 
    value="{{isset($producto->nombre)?$producto->nombre:old('nombre')}}">
    @error('nombre')
        <small>* {{$message}}</small>
    @enderror
</div>
<br>
<div>
    <label for="marca">Marca/Asunto:</label>
    <input type="text" name="marca" id="marca" required 
    value="{{isset($producto->marca)?$producto->marca:old('marca')}}">
    @error('marca')
        <small>* {{$message}}</small>
    @enderror
</div>
<br>
<div>
    <label for="categoria_id">Categoria:</label>
    <select name="categoria_id">
    <option selected disabled>-Seleccionar-</option>
        @foreach ($categorias as $c)
            <option value="{{$c->id}}" 
            {{(isset($producto->categoria_id) && $producto->categoria_id == $c->id)?'selected':''}}
            >{{$c->tipo}}</option>
        @endforeach
    </select>
    @error('categoria_id')
        <small>* {{$message}}</small>
    @enderror
</div>
<br>
<div>
    <label for="stock">Cantidad:</label>
    <input type="number" name="stock" id="stock" min="0" max="999" required 
    value="{{isset($producto->stock)?$producto->stock:old('stock')}}">
    @error('stock')
        <small>* {{$message}}</small>
    @enderror
</div>
<br>
<div>
    <label for="precio">Costo unitario:</label>
    <input type="number" name="precio" id="precio" min="0" max="9999" required 
    value="{{isset($producto->precio)?$producto->precio:old('precio')}}">
    @error('precio')
        <small>* {{$message}}</small>
    @enderror
</div>
<br>
<div>
    <label for="foto">Imagen:</label><br><br>
    @if (isset($producto->foto))
    <img src="{{asset('storage').'/'.$producto->foto}}" 
    alt="{{asset('storage').'/'.$producto->foto}}" width="200px" height="200px"><br><br>
    @endif
    <input type="file" name="foto" id="foto">
    @error('foto')
        <small>* {{$message}}</small>
    @enderror
</div>
<br>
<input type="submit" value="{{$modo}} Registro">