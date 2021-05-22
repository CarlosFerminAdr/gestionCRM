<label for="">Nombre:</label>
<input type="text" name="nombre" id="nombre" 
value="{{isset($usuario->nombre)?$usuario->nombre:old('nombre')}}">
@error('nombre')
    <small>* {{$message}}</small>
@enderror
<br><br>
<label for="">Usuario:</label>
<input type="text" name="user" id="user" 
value="{{isset($usuario->user)?$usuario->user:old('user')}}">
@error('user')
    <small>* {{$message}}</small>
@enderror
<br><br>
<label for="">Contraseña:</label>
<input type="password" name="password" id="password" 
value="{{isset($usuario->password)?$usuario->password:old('password')}}">
@error('password')
    <small>* {{$message}}</small>
@enderror
<br><br>
<input type="submit" value="{{$modo}} Registro">