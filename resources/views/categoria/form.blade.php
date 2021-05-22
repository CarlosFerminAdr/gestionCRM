<label for="">Categoria:</label>
<input type="text" name="tipo" id="tipo" 
value="{{isset($categoria->tipo)?$categoria->tipo:old('tipo')}}">
@error('tipo')
    <small>* {{$message}}</small>
@enderror
<br><br>
<label for="">Descripción:</label>
<input type="text" name="descripcion" id="descripcion" 
value="{{isset($categoria->descripcion)?$categoria->descripcion:old('descripcion')}}">
@error('descripcion')
    <small>* {{$message}}</small>
@enderror
<br><br>
<input type="submit" value="{{$modo}} Registro">