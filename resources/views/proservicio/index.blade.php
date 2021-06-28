@extends('layouts.app')
@section('content')
    <div class="container">
        @if(Session('mensaje') == 'Servicio de Compra realizada con exito!!')
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{Session::get('mensaje')}}</strong>
                <button type="button"class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if(Session('mensaje') == 'Transaccion no valida intentelo de nuevo!!')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{Session::get('mensaje')}}</strong>
                <button type="button"class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="container-fluid mt-2">
            <h1 class="text-center"><strong>SERVICIO DE COMPRA</strong></h1><hr>
        </div>
        
        <form action="{{route('proservicio.store')}}" method="POST">
            @csrf
            <div class="row mt-3">
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-header text-center" style="background-color: black;">
                            <strong style="color:white">Agregar al Carrito</strong>
                        </div>

                        <div class="card-body" style="background-color: Darkred;">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="nombre" class="form-label"><strong style="color:white">Producto:</strong></label>
                                            <select name="nombre" id="nombre" class="form-control" onchange="coloca_precio()">
                                                <option value="0">-seleccione-</option>
                                                @foreach ($productos as $p)
                                                    <option precio="{{$p->precio}}" value="{{$p->id}}">{{$p->nombre}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="mb-3">
                                            <label for="precio" class="form-label"><strong style="color:white">Precio:</strong></label>
                                            <input type="text" name="precio" id="precio" value="0" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="mb-3">
                                            <label for="cantidad_producto" class="form-label"><strong style="color:white">Cantidad:</strong></label>
                                            <input type="number" name="cantidad_producto" id="cantidad_producto" value="0" min="0" max="9999" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <button type="button" onclick="agregarProducto()" class="btn btn-success float-right mt-4">
                                            <i class="bi bi-cart2"></i>
                                        </button>
                                    </div>
                                </div>

                            <br>
                            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                <table class="table table-hover" style="background-color: Darkgreen;">
                                    <thead class="thead" style="background-color: Black;">
                                        <tr style="color:white">
                                            <th>Producto</th>
                                            <th>Cantidad</th>
                                            <th>Precio</th>
                                            <th>Subtotal</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tabProductos">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header text-center" style="background-color: black;">
                            <strong style="color:white">Captura de Compra</strong>
                        </div>

                        <div class="card-body" style="background-color: Darkred;">
                            <div class="row">
                                <div class="col">
                                    <label for="fecha" class="form-label"><strong style="color:white">Fecha:</strong></label>
                                    <input name="fecha" id="fecha" value="{{ $fecha }}" class="form-control" readonly>
                                </div>
                                <div class="col-sm-6">
                                    <label for="hora" class="form-label"><strong style="color:white">Hora:</strong></label>
                                    <input name="hora" id="hora" value="{{ $hora }}" class="form-control" readonly>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col">
                                    <label for="categoria_id" class="form-label"><strong style="color:white">Servicio:</strong></label>
                                    <select name="categoria_id" id="categoria_id" class="form-control">
                                        <option value="0">-seleccione-</option>
                                        @foreach ($categorias as $s)
                                            <option value="{{$s->id}}">{{$s->tipo}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label for="cliente_id" class="form-label"><strong style="color:white">Cliente:</strong></label>
                                    <select name="cliente_id" id="cliente_id" class="form-control">
                                        <option value="0">-seleccione-</option>
                                        @foreach ($clientes as $c)
                                            <option value="{{$c->id}}">{{$c->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col">
                                    <label for="cantidad" class="form-label"><strong style="color:white">Cantidad:</strong></label>
                                    <input type="number" name="cantidad" id="cantidad" value="0" min="0" max="9999" class="form-control" readonly>
                                </div>
                                <div class="col-sm-7">
                                    <label for="costo_total" class="form-label"><strong style="color:white">Costo Total:</strong></label>
                                    <input type="text" name="costo_total" id="costo_total" value="0" min="0" max="9999" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success float-right" type="submit">Enviar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('Scripts')
    <script>
        function coloca_precio(){
            let precio = $('#nombre option:selected').attr('precio');
            $('#precio').val(precio);
        }

        function agregarProducto(){
            let producto_id = $("#nombre option:selected").val();
            let producto_tex = $("#nombre option:selected").text();
            let cantidad = $("#cantidad_producto").val();
            let precio = $("#precio").val();
            $("#cantidad_producto").val(0);
            if (cantidad >0 && precio >0){
                $("#tabProductos").append(`
                    <tr id="tr-${producto_id}" style="color:white">
                        <td>
                            <input type="hidden" name="producto_id[]" value="${producto_id}"/>
                            <input type="hidden" name="cantidades[]" value="${cantidad}"/>
                            ${producto_tex}
                        </td>
                        <td>${cantidad}</td>
                        <td>${precio}</td>
                        <td>${parseInt(precio)*parseInt(cantidad)}</td>
                        <td>
                            <button type="button" onclick="eliminarProducto(${producto_id},${parseInt(precio)*parseInt(cantidad)})" class="btn btn-danger col-sm-10">
                                <i class="bi bi-x-lg"></i>
                            </button>
                        </td>
                    </tr>
                `);
                let carrito = $("#costo_total").val() || 0;
                $("#costo_total").val(parseInt(carrito)+parseInt(precio)*(parseInt(cantidad)));

                let num = $("#cantidad").val();
                $("#cantidad").val(1);
                if (num >= 0){
                    $("#cantidad").val(parseInt(num)+parseInt(1));
                }else{
                    $("#cantidad").val(0);
                }
                
            }else{
                alert("Ingrese Cantidad y/o Precio validos!!");
            }
        }
        function eliminarProducto(id,subtotal){
            $("#tr-"+id).remove();
            let carrito = $("#costo_total").val() || 0;
                $("#costo_total").val(parseInt(carrito)-subtotal);

            let num = $("#cantidad").val();
            $("#cantidad").val(1);
            if (num >= 0){
                $("#cantidad").val(parseInt(num)-parseInt(1));
            }else{
                $("#cantidad").val(0);
            }
        }
        
    </script>
@endsection