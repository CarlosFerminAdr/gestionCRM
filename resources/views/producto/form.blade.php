<div>
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" 
    value="{{isset($producto->nombre)?$producto->nombre:old('nombre')}}">
    @error('nombre')
        <small>* {{$message}}</small>
    @enderror
</div>
<br>
<div>
    <label for="marca">Marca:</label>
    <input type="text" name="marca" id="marca" 
    value="{{isset($producto->marca)?$producto->marca:old('marca')}}">
    @error('marca')
        <small>* {{$message}}</small>
    @enderror
</div>
<br>
<div>
    <label for="stock">Cantidad:</label>
    <input type="text" name="stock" id="stock" 
    value="{{isset($producto->stock)?$producto->stock:old('stock')}}">
    @error('stock')
        <small>* {{$message}}</small>
    @enderror
</div>
<br>
<div>
    <label for="precio">Precio:</label>
    <input type="text" name="precio" id="precio" 
    value="{{isset($producto->precio)?$producto->precio:old('precio')}}">
    @error('marca')
        <small>* {{$message}}</small>
    @enderror
</div>
<br>
<div>
    <label for="categoria_id">Categoria:</label>
    <select name="categoria_id">
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
    <label for="foto">Foto:</label>
    <input type="text" name="foto" id="foto" 
    value="{{isset($producto->foto)?$producto->foto:old('foto')}}">
    @error('foto')
        <small>* {{$message}}</small>
    @enderror
</div>
<br>
<input type="submit" value="{{$modo}} Producto">