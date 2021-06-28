@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center" style="background-color: black;">
                    <strong style="color:white">{{ __('Pagina Prncipal') }}</strong></div>

                <div class="card-body" style="background-color: Darkred;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <strong style="color:white">¡ {{ __('Bienbenido de nuevo') }} {{ Auth::user()->name }} !</strong>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>

<center>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/dos.jpg') }}" width="900px" height="400px"  alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2><strong style="color: whithe">ServiCell.</strong></h2>
                    <h6><strong style="color: White">Accesorios y Dispositivos Moviles de calidad al mejor precio.</strong></h6>
                </div>
            </div>
        </div>
    </div>
</center>
@endsection
