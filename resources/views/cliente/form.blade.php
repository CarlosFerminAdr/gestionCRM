<div>
    <label for="">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required 
    value="{{isset($cliente->nombre)?$cliente->nombre:old('nombre')}}">
    @error('nombre')
        <small>* {{$message}}</small>
    @enderror
</div>
<br>
<div>
    <label for="">Apellido paterno:</label>
    <input type="text" name="a_paterno" id="a_paterno" required 
    value="{{isset($cliente->a_paterno)?$cliente->a_paterno:old('a_paterno')}}">
    @error('a_paterno')
        <small>* {{$message}}</small>
    @enderror
</div>
<br>
<div>
    <label for="">Apellido materno:</label>
    <input type="text" name="a_materno" id="a_materno" required 
    value="{{isset($cliente->a_materno)?$cliente->a_materno:old('a_materno')}}">
    @error('a_materno')
        <small>* {{$message}}</small>
    @enderror
</div>
<br>
<div>
    <label for="sexo">Sexo:</label>
    <select name="sexo">
        <option selected disabled>-Seleccionar-</option>
        <option Value="Femenino" 
        {{isset($cliente->sexo)?($cliente->sexo?'selected':old('sexo')):''}}>Femenino</option>
        <option Value="Masculino" 
        {{isset($cliente->sexo)?($cliente->sexo?'selected':old('sexo')):''}}>Masculino</option>
    </select>
    @error('sexo')
        <small>* {{$message}}</small>
    @enderror
</div>
<br>
<div>
    <label for="">Télefono:</label>
    <input type="number" name="telefono" id="telefono" min="0" max="9999999999" required 
    value="{{isset($cliente->telefono)?$cliente->telefono:old('sexo')}}">
    @error('telefono')
        <small>* {{$message}}</small>
    @enderror
</div>
<br>
<div>
    <label for="">Dirección:</label>
    <input type="text" name="direccion" id="direccion" required 
    value="{{isset($cliente->direccion)?$cliente->direccion:old('direccion')}}">
    @error('direccion')
        <small>* {{$message}}</small>
    @enderror
</div>
<br>
<input type="submit" value="{{$modo}} Registro">