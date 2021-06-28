@extends('layouts.app')
@section('content')
    <div class="container">

        @if(Session('mensaje') == 'Seleccione el regrito a eliminar!!')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{Session::get('mensaje')}}</strong>
                <button type="button"class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="container-fluid mt-2">
            <h1 class="text-center"><strong>HISTORIAL DE VENTAS</strong></h1>
            <hr>
        </div>
        <table class="table table-hover" style="background-color: Crimson;">
            <thead class="thead" style="background-color: Maroon;">
                <tr style="color:white">
                    <th>Id</th>
                    <th>Fecha y Hora</th>
                    <th>Servicio</th>
                    <th>Cliente</th>
                    <th>Articulos</th>
                    <th>Total</th>
                    <th colspan="2" >Más Detalles</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($servicios as $e)
                    <tr style="color:white">
                        <th>{{$e->id}}</th>
                        <th>{{$e->fecha}} - {{$e->hora}}</th>
                        <th>{{$e->categoria->descripcion}}</th>
                        <th>{{$e->cliente->nombre}} {{$e->cliente->a_paterno}} {{$e->cliente->a_materno}}</th>
                        <th>{{$e->cantidad}}</th>
                        <th>{{$e->costo_total}}</th>
                        <th>
                            <a href="{{route('proservicio.show',$e->id)}}" class="btn btn-outline-light pull-right col-sm-12"> <!-- data-toggle="modal" data-target="#create" -->
                                <i class="bi bi-cursor-fill"></i>
                            </a>
                        </th>
                        <th>
                            <a href="#" class="btn btn-primary pull-right col-sm-12" data-toggle="modal" data-target="#create">
                                <i class="bi bi-search"></i>
                            </a>
                        </th>
                        <td>
                            <form action="{{ route('proservicio.destroy',$e->id) }}" class="formulario-eliminar" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger col-sm-10" type="submit">
                                    <i class="bi bi-x-lg"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$servicios->links()}}
        <div>
            @if(count($productos)>0)
                
            @endif
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
                        <h1 class="text-center"><strong>Articulos Vendidos</strong></h1>
                        
                        <table class="table table-hover" style="background-color: Crimson;">
                            <thead class="thead" style="background-color: Maroon;"><hr>
                                <tr style="color:white">
                                    <th>Imagen</th>
                                    <th>Producto</th>
                                    <th>Marca</th>
                                    <th>Categoria</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productos as $p)
                                    <tr style="color:white">
                                        <th><img class="img-thumbnail img-fluid" width="50px" height="50px" 
                                        src="{{asset('storage').'/'.$p->foto}}" 
                                        alt="{{asset('storage').'/'.$p->foto}}" data-toggle="modal" data-target="#create"></th>
                                        <th>{{$p->nombre}}</th>
                                        <th>{{$p->marca}}</th>
                                        <th>{{$p->categoria->tipo}}</th>
                                        <th>{{$p->cantidad}}</th>
                                        <th>{{$p->precio}}</th>
                                        <th>{{$p->cantidad * $p->precio}}</th>
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
</div>
@endsection


@section('Scripts')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(Session('mensaje') == 'Registro de venta eliminado con exito!!')
        <script>
            Swal.fire(
                '¡Eliminado!',
                'Registro eliminado con exito.',
                'success'
            )
        </script>
    @endif

    <script>
        $('.formulario-eliminar').submit(function(e){
            e.preventDefault();

            Swal.fire({
                title: '¡Advertencia!',
                text: "¿Desea eliminar el registro?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si',
                cancelButtonText: 'No',
                background: 'Papayawhip',
                backdrop: `rgba(0,1,143,0.6)`
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });
    </script>
@endsection
