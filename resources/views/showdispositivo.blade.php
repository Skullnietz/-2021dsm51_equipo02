<style>
    .product-block {
        background-color: white;
        border-radius: 1em;
        padding: 1em;
    }

    .product-info {
        background-color: rgba(211, 211, 211, 0.959);
        border-radius: 1em;
        padding: 1em;
    }

    body {
        background-image: url(../Imagenes/productowallpaper.jpg);
        background-size: cover;
    }

    body {
        margin: 40px;
    }


    .btn-circle {
        width: 30px;
        height: 30px;
        text-align: center;
        padding: 6px 0;
        font-size: 12px;
        line-height: 1.428571429;
        border-radius: 15px;
    }

    .btn-circle.btn-lg {
        width: 50px;
        height: 50px;
        padding: 10px 16px;
        font-size: 18px;
        line-height: 1.33;
        border-radius: 25px;
    }

    .btn-circle.btn-xl {
        width: 70px;
        height: 70px;
        padding: 10px 16px;
        font-size: 24px;
        line-height: 1.33;
        border-radius: 35px;
    }

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@extends('dashboard')
@section('title')
    Detalles de {{ $device->Dispositivo }}
@endsection
@section('content')

    <div class="container text-center">
        <div class="page header">
            <h1 class="font-weight-bold"><i class="fa fa-tablet"></i> Detalle del dispositivo</h1>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="product-block">
                    <img class="rounded " width="250" src="{{ asset('Imagenes') . '/' . $device->img }}" alt="imgproduct">
                </div>
            </div>
            <div class="col-md-6">

                <div class="card text-center">
                    <div class="card-header">
                        <h3>{{ $device->Dispositivo }}</h3>
                        <small>Estado del dispositivo: {{ $device->Estado }} </small>
                    </div>



                    <div class="card-body">


@if ($device->Estado == 'OFF')





<form class="needs-validation" novalidate="" action="{{route('dispositivo.update', $device->id)}}" method="post">
    @csrf @method('PUT')
                            <button type="submit" class="btn btn-success btn-square btn-lg">Encender</i>
                            </button>
                            <button  class="btn btn-success btn-circle btn-xl" ><i
                                    class="fa fa-toggle-on"></i>

                            </button>
                            <input type="hidden" id="Estado" name="Estado" value="ON" required="">
                            <input type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}" required="">
                        </form>


@else









<form class="needs-validation" novalidate="" action="{{route('dispositivo.update', $device->id)}}" method="post">
    @csrf @method('PUT')
                            <button type="submit" class="btn btn-danger btn-square btn-lg" >Apagar</i>
                            </button>
                            <button type="submit" class="btn btn-danger btn-circle btn-xl" ><i
                                    class="fa fa-toggle-off"></i>
                            </button>
                            <input type="hidden" id="Estado" name="Estado" value="OFF" required="">
                            <input type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}" required="">
                        </form>

@endif


                    </div>








                </div>

            </div>


            <br>
            <p><a class="btn btn-lg btn-primary" href="{{ route('productos.index') }}"> <i
                        class="fa fa-chevron-circle-left"></i> Regresar </a></p>
        </div>





    @stop
