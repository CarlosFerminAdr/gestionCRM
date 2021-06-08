<div class="container">
    <h1 class="text-center"><strong>{{$modo}} Producto</strong></h1>
    <hr>
    <div class="row">
        <div class="col-sm-6 offset-3"> 
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Producto/Servicio:</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" required 
                        value="{{isset($producto->nombre)?$producto->nombre:old('nombre')}}">
                        @error('nombre')
                            <small style="color:red;">* {{$message}}</small>
                        @enderror
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="marca" class="form-label">Marca/Asunto:</label>
                        <input type="text" class="form-control" name="marca" id="marca" required 
                        value="{{isset($producto->marca)?$producto->marca:old('marca')}}">
                        @error('marca')
                            <small style="color:red;">* {{$message}}</small>
                        @enderror
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="categoria_id" class="form-label">Categoria:</label>
                        <select class="form-control" name="categoria_id">
                        <option selected disabled>-Seleccionar-</option>
                            @foreach ($categorias as $c)
                                <option value="{{$c->id}}" 
                                {{(isset($producto->categoria_id) && $producto->categoria_id == $c->id)?'selected':''}}
                                >{{$c->tipo}}</option>
                            @endforeach
                        </select>
                        @error('categoria_id')
                            <small style="color:red;">* {{$message}}</small>
                        @enderror
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="stock" class="form-label">Cantidad:</label>
                        <input type="number" class="form-control" name="stock" id="stock" min="0" max="999" required 
                        value="{{isset($producto->stock)?$producto->stock:old('stock')}}">
                        @error('stock')
                            <small style="color:red;">* {{$message}}</small>
                        @enderror
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Costo unitario:</label>
                        <input type="number" class="form-control" name="precio" id="precio" min="0" max="9999" required 
                        value="{{isset($producto->precio)?$producto->precio:old('precio')}}">
                        @error('precio')
                            <small style="color:red;">* {{$message}}</small>
                        @enderror
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Imagen:</label><br>
                        @if (isset($producto->foto))
                            <div class="d-flex justify-content-center">
                                <img class="img-thumbnail img-fluid" width="250px" height="250px" 
                                src="{{asset('storage').'/'.$producto->foto}}" alt="{{asset('storage').'/'.$producto->foto}}">
                            </div><br>
                        @endif
                        <input class="form-control" type="file" name="foto" id="foto">
                        @error('foto')
                            <small style="color:red;">* {{$message}}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <input class="btn btn-success float-right mt-4" type="submit" value="{{$modo}} Producto">

            <a class="btn btn-dark float-end mt-4" href="{{route('productos.index')}}">
            <i class="bi bi-arrow-return-left"></i> Atras</a>
        </div>
    </div>
</div>