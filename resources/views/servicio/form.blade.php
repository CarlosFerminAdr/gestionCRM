<div>
    <label for="codigo">Codigo:</label>
    <input type="text" name="codigo" id="codigo" 
    value="{{isset($servicio->codigo)?$servicio->codigo:old('codigo')}}">
    @error('codigo')
        <small>* {{$message}}</small>
    @enderror
</div>
<br>
<div>
    <label for="fecha_inicio">Fecha de Inicio:</label>
    <input type="datetime-local" name="fecha_inicio" id="fecha_inicio" 
    value="{{isset($servicio->fecha_inicio)?$servicio->fecha_inicio:old('fecha_inicio')}}">
    @error('fecha_inicio')
        <small>* {{$message}}</small>
    @enderror
</div>
<br>
<div>
    <label for="fecha_fin">Fecha de Termino:</label>
    <input type="datetime-local" name="fecha_fin" id="fecha_fin" 
    value="{{isset($servicio->fecha_fin)?$servicio->fecha_fin:old('fecha_fin')}}">
    @error('fecha_fin')
        <small>* {{$message}}</small>
    @enderror
</div>
<br>
<div>
    <label for="costo_servicio">Costo del Servicio:</label>
    <input type="text" name="costo_servicio" id="costo_servicio" 
    value="{{isset($servicio->costo_servicio)?$servicio->costo_servicio:old('costo_servicio')}}">
    @error('costo_servicio')
        <small>* {{$message}}</small>
    @enderror
</div>
<br>
<div>
    <label for="cliente_id">Cliente:</label>
    <select name="cliente_id">
        @foreach ($clientes as $c)
            <option value="{{$c->id}}" 
            {{(isset($servicio->cliente_id) && $servicio->cliente_id == $c->id)?'selected':''}}
            >{{$c->nombre}}</option>
        @endforeach
    </select>
    @error('cliente_id')
        <small>* {{$message}}</small>
    @enderror
</div>
<br>
<div>
    <label for="producto_id">Producto:</label>
    <select name="producto_id">
        @foreach ($productos as $p)
            <option value="{{$p->id}}" 
            {{(isset($servicio->producto_id) && $servicio->producto_id == $c->id)?'selected':''}}
            >{{$p->nombre}}</option>
        @endforeach
    </select>
    @error('producto_id')
        <small>* {{$message}}</small>
    @enderror
</div>
<br>
<input type="submit" value="{{$modo}} Servicio">