<div class="container">
    <h1 class="text-center"><strong>{{$modo}} Cliente</strong></h1>
    <hr>
    <div class="row">
        <div class="col-sm-6 offset-3">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" required 
                        value="{{isset($cliente->nombre)?$cliente->nombre:old('nombre')}}">
                        @error('nombre')
                            <small style="color:red;">* {{$message}}</small>
                        @enderror
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="a_paterno" class="form-label">Apellido paterno:</label>
                        <input type="text" class="form-control" name="a_paterno" id="a_paterno" required 
                        value="{{isset($cliente->a_paterno)?$cliente->a_paterno:old('a_paterno')}}">
                        @error('a_paterno')
                            <small style="color:red;">* {{$message}}</small>
                        @enderror
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="a_materno" class="form-label">Apellido materno:</label>
                        <input type="text" class="form-control" name="a_materno" id="a_materno" required 
                        value="{{isset($cliente->a_materno)?$cliente->a_materno:old('a_materno')}}">
                        @error('a_materno')
                            <small style="color:red;">* {{$message}}</small>
                        @enderror
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="sexo" class="form-label">Sexo:</label>
                        <select class="form-control" name="sexo">
                            <option selected disabled>-Seleccionar-</option>
                            <option Value="Femenino" 
                            {{isset($cliente->sexo)?($cliente->sexo?'selected':old('sexo')):''}}>Femenino</option>
                            <option Value="Masculino" 
                            {{isset($cliente->sexo)?($cliente->sexo?'selected':old('sexo')):''}}>Masculino</option>
                        </select>
                        @error('sexo')
                            <small style="color:red;">* {{$message}}</small>
                        @enderror
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Télefono:</label>
                        <input type="number" class="form-control" name="telefono" id="telefono" min="0" max="9999999999" required 
                        value="{{isset($cliente->telefono)?$cliente->telefono:old('sexo')}}">
                        @error('telefono')
                            <small style="color:red;">* {{$message}}</small>
                        @enderror
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="direccion" class="form-label">Dirección:</label>
                        <input type="text" class="form-control" name="direccion" id="direccion" required 
                        value="{{isset($cliente->direccion)?$cliente->direccion:old('direccion')}}">
                        @error('direccion')
                            <small style="color:red;">* {{$message}}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <input class="btn btn-success float-right mt-4" type="submit" value="{{$modo}} Cliente">

            <a class="btn btn-dark float-end mt-4" href="{{route('clientes.index')}}">
            <i class="bi bi-arrow-return-left"></i> Atras</a>
        </div>
    </div>
</div>