<div class="container">
    <h1 class="text-center"><strong>{{$modo}} Categoria</strong></h1>
    <hr>
    <div class="row">
        <div class="col-sm-6 offset-3">
            <div class="card">
                <div class="card-header text-center" style="background-color: black;">
                    <strong style="color:white">Formulario Categoria</strong>
                </div>
                <div class="card-body" style="background-color: Darkred;">
                    <div class="mb-3">
                        <label for="tipo" class="form-label"><strong style="color:white">Categoria:</strong></label>
                        <input type="text" class="form-control" name="tipo" id="tipo" required 
                        value="{{isset($categoria->tipo)?$categoria->tipo:old('tipo')}}">
                        @error('tipo')
                            <small style="color:red;">* {{$message}}</small>
                        @enderror
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label"><strong style="color:white">Descripción: </strong></label>
                        <input type="text" class="form-control" name="descripcion" id="descripcion" required 
                        value="{{isset($categoria->descripcion)?$categoria->descripcion:old('descripcion')}}">
                        @error('descripcion')
                            <small style="color:red;">* {{$message}}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <input class="btn btn-success float-right mt-4" type="submit" value="{{$modo}} Categoria">

            <a class="btn btn-dark float-end mt-4" href="{{route('categorias.index')}}">
            <i class="bi bi-arrow-return-left"></i> Atras</a>
        </div>
    </div>
</div>
