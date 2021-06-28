@extends('layouts.app')
@section('content')
    <div class="container">
        @if(Session('mensaje') == 'Producto agregado con exito!!')
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{Session::get('mensaje')}}</strong>
                <button type="button"class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if(Session('mensaje') == 'Producto actualizado con exito!!')
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{Session::get('mensaje')}}</strong>
                <button type="button"class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        
        @if(Session('mensaje') == 'No se puede eliminal el Producto, por las Reglas de Integridad Referencial!')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{Session::get('mensaje')}}</strong>
                <button type="button"class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <h1 class="text-center"><strong>LISTADO DE PRODUCTOS</strong></h1>
        <hr>
        <a class="btn btn-primary float-right" href="{{route('productos.create')}}"><i class="bi bi-plus-lg"></i> Agregar</a><br><br>
        <table class="table table-hover" style="background-color: Crimson;">
            <thead class="thead" style="background-color: Maroon;">
                <th style="color:white">Id</th>
                <th style="color:white">Imagen</th>
                <th style="color:white">Producto</th>
                <th style="color:white">Marca</th>
                <th style="color:white">Categoria</th>
                <th style="color:white">Cantidad</th>
                <th style="color:white">Precio</th>
                <th style="color:white">Consultar</th>
                <th style="color:white">Editar</th>
                <th style="color:white">Eliminar</th>
            </thead>
            <tbody>
                @foreach ($productos as $p)
                    <tr style="color:white">
                        <td>{{$p->id}}</td>
                        <td><img class="img-thumbnail img-fluid" width="90px" height="90px" 
                        src="{{asset('storage').'/'.$p->foto}}" alt="{{asset('storage').'/'.$p->foto}}"></td>
                        <td>{{$p->nombre}}</td>
                        <td>{{$p->marca}}</td>
                        <td>{{$p->categoria->tipo}}</td> <!-- <a href="{{route('categorias.show',$p->categoria)}}"> -->
                        <td>{{$p->stock}} piezas</td>
                        <td>${{$p->precio}}.00</td>
                        <td><a class="btn btn-outline-light col-sm-10" href=" {{route('productos.show',$p)}} ">
                            <i class="bi bi-search"></i></a>
                        </td>
                        <td><a class="btn btn-warning col-sm-10" href="{{route('productos.edit',$p)}}">
                            <i class="bi bi-check-lg"></i></a>
                        </td>
                        <td>
                            <form action="{{route('productos.destroy',$p)}}" class="formulario-eliminar" method="POST">
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
        {{$productos->links()}}
    </div>
@endsection


@section('Scripts')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(Session('mensaje') == 'Producto eliminado con exito!!')
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