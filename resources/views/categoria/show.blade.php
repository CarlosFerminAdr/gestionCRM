@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center"><strong>Consultar Categoria</strong></h1>
        <hr>
        <div class="row">
            <div class="col-sm-6 offset-3">
                <div class="card">
                    <div class="card-header text-center" style="background-color: black;">
                        <strong style="color:white">Datos de la Categoria</strong>
                    </div>
                    <div class="card-body" style="background-color: Darkred;">
                        <h4><strong style="color:white">Categoria:</strong></h4>
                        <div class="list-group">
                            <h4 class="form-control">{{$categoria->tipo}}</h4>
                            <hr>
                        </div>
                        <h4><strong style="color:white">Descripción:</strong></h4>
                        <div class="list-group">
                            <h4 class="form-control">{{$categoria->descripcion}}</h4>
                            <hr>
                        </div>
                        
                    </div>
                </div>
                <a class="btn btn-primary float-right mt-4 col-sm-2" data-toggle="modal" data-target="#create">
                    <i class="bi bi-search"></i></a>

                <a class="btn btn-dark float-end mt-4" href="{{route('categorias.index')}}">
                    <i class="bi bi-arrow-return-left"></i> Atrás</a>
                </a>
            </div>
        </div>
    </div>

    <!-- +++++++++++++++++++++++++++++++++ Modal ++++++++++++++++++++++++++++++++++++++ -->
    
    <div class="modal fade" id="create" style="background-color: rgba(0,2,50,0.4);">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content" style="background-color: Khaki;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span>×</span>
                        </button>
                        
                    </div>
                    <div class="modal-body">
                        <h1 class="text-center"><strong>Productos de la Categoria {{$categoria->tipo}}</strong></h1>
                        
                        <table class="table table-hover" style="background-color: Crimson;">
                            <thead class="thead" style="background-color: Maroon;"><hr>
                                <tr style="color:white">
                                    <th>#</th>
                                    <th>Imagen</th>
                                    <th>Producto</th>
                                    <th>Marca</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categoria->productos as $p)
                                    <tr style="color:white">
                                        <th>{{$p->id}}</th>
                                        <th><img class="img-thumbnail img-fluid" width="50px" height="50px" 
                                            src="{{asset('storage').'/'.$p->foto}}" alt="{{asset('storage').'/'.$p->foto}}"></th>
                                        <th>{{$p->nombre}}</th>
                                        <th>{{$p->marca}}</th>
                                        <th>{{$p->stock}}</th>
                                        <th>{{$p->precio}}</th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="modal-footer">
                        <a type="submit" class="btn btn-dark" data-dismiss="modal" value="Aceptar">
                            <i class="bi bi-arrow-return-left"></i> Salir
                        </a>
                    </div>
                </div>
            </div>
        </div>
@endsection
