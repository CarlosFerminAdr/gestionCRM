<div>
    <label for="id">Codigo:</label>
    <input type="number" name="id" id="id" 
    value="{{isset($servicio->id)?$servicio->id:old('id')}}" disabled>
</div>
<br>
<div>
    <label for="fecha_hora">Fecha y Hora:</label>
    <input type="datetime-local" name="fecha_hora" id="fecha_hora" required 
    value="{{isset($servicio->fecha_hora)?$servicio->fecha_hora:old('fecha_hora')}}">
    @error('fecha_hora')
        <small>* {{$message}}</small>
    @enderror
</div>
<br>
<div>
    <label for="cliente_id">Cliente:</label>
    <select name="cliente_id">
    <option selected disabled>-Seleccionar-</option>
        @foreach ($clientes as $c)
            <option value="{{$c->id}}" 
            {{isset($servicio->cliente_id)?($servicio->cliente_id==$c->id?'selected':''):''}}
            >{{$c->nombre}}</option>
        @endforeach
    </select>
    @error('cliente_id')
        <small>* {{$message}}</small>
    @enderror
</div>
<br>
<div>
    <label for="producto_id">Producto/Servicio:</label>
    <select name="producto_id">
    <option selected disabled>-Seleccionar-</option>
        @foreach ($productos as $p)
            <option value="{{$p->id}}" 
            {{isset($servicio->producto_id)?($servicio->producto_id==$p->id?'selected':''):''}}
            >{{$p->nombre}}</option>
        @endforeach
    </select>
    @error('producto_id')
        <small>* {{$message}}</small>
    @enderror
</div>
<br>
<div>
    <label for="producto_id">Costo Unitario:</label>
    <select name="producto_id" disabled>
    <option selected disabled>$</option>
        @foreach ($productos as $p)
            <option value="{{$p->id}}" 
            {{isset($servicio->producto_id)?($servicio->producto_id==$p->id?'selected':''):''}}
            > $ {{$p->precio}}.00</option>
        @endforeach
    </select>
</div>
<br>
<div>
    <label for="cantidad">Cantidad:</label>
    <input type="number" name="cantidad" id="cantidad" min="0" max="999" required 
    value="{{isset($servicio->cantidad)?$servicio->cantidad:old('cantidad')}}">
    @error('cantidad')
        <small>* {{$message}}</small>
    @enderror
</div>
<br>
<div>
    <label for="costo_total">Costo Total:</label>
    <input type="text" name="costo_total" id="costo_total" value=" $ " disabled>
</div>
<br>
<input type="submit" value="{{$modo}} Servicio">