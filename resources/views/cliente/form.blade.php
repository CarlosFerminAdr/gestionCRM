<label for="">Nombre:</label>
<input type="text" name="nombre" id="nombre" 
value="{{isset($cliente->nombre)?$cliente->nombre:old('nombre')}}">
@error('nombre')
    <small>* {{$message}}</small>
@enderror
<br><br>
<label for="">Apellido paterno:</label>
<input type="text" name="a_paterno" id="a_paterno" 
value="{{isset($cliente->a_paterno)?$cliente->a_paterno:old('a_paterno')}}">
@error('a_paterno')
    <small>* {{$message}}</small>
@enderror
<br><br>
<label for="">Apellido materno:</label>
<input type="text" name="a_materno" id="a_materno" 
value="{{isset($cliente->a_materno)?$cliente->a_materno:old('a_materno')}}">
@error('a_materno')
    <small>* {{$message}}</small>
@enderror
<br><br>
<label for="">Sexo:</label>
<input type="text" name="sexo" id="sexo" 
value="{{isset($cliente->sexo)?$cliente->sexo:old('sexo')}}">
@error('sexo')
    <small>* {{$message}}</small>
@enderror
<br><br>
<label for="">Télefono:</label>
<input type="text" name="telefono" id="telefono" 
value="{{isset($cliente->telefono)?$cliente->telefono:old('sexo')}}">
@error('telefono')
    <small>* {{$message}}</small>
@enderror
<br><br>
<label for="">Dirección:</label>
<input type="text" name="direccion" id="direccion" 
value="{{isset($cliente->direccion)?$cliente->direccion:old('direccion')}}">
@error('direccion')
    <small>* {{$message}}</small>
@enderror
<br><br>
<input type="submit" value="{{$modo}} Registro">