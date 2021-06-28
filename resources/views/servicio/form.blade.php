<h1>{{$modo}} SERVICIO</h1>
<hr>

<div>
    <label for="fecha_hora">Fecha y Hora:</label>
    <input type="datetime-local" name="fecha_hora" id="fecha_hora" required 
    value="{{isset($servicio->fecha_hora)?$servicio->fecha_hora:old('fecha_hora')}}">
    @error('fecha_hora')
        <small>* {{$message}}</small>
    @enderror
</div>
<br>
<input type="submit" value="{{$modo}} Servicio">