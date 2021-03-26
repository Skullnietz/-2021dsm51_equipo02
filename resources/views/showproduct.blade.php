<style>
    .product-block
{
    background-color: white;
    border-radius: 1em;
    padding: 1em;
}
.product-info
{
    background-color: rgba(211, 211, 211, 0.959);
    border-radius: 1em;
    padding: 1em;
}
body{
    background-image: url(../Imagenes/productowallpaper.jpg);
    background-size: cover;
}

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@extends('dashboard')
@section('title')
Detalles
@endsection
@section('content')
<div class="container text-center">
    <div class="page header">
        <h1 class="font-weight-bold"><i class="fa fa-shopping-cart"></i> Detalle del producto</h1>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="product-block">
                <img class= "rounded "src="{{ asset('Imagenes').'/'.$producto->img}}" alt="imgproduct">
            </div>
        </div>
        <div class="col-md-6">

                <div class="card text-center">
                    <div class="card-header">
                        <h3>{{$producto->producto}}</h3>
                    </div>
                    <div class="card-body">
                        <h5><i class="fa fa-info-circle"></i> Descripcion del producto</h5>
                        <div class="product-info panel">

                            <p>{{ $producto->descripcion}}</p>

                        </div>
                    </div>

                  <div class="card text-center ">

                    <div class="card-header">
                      <h4>Precio:</h4>
                    </div>
                    <div class="card-body">
                        <h3> <span class="bg-success">$ {{$producto->costo}} <small>MXN</small></span> </h3>
                        <p>
                            <a class="btn btn-warning btn-block" href="#"><i class="fa fa-shopping-cart"></i> Comprar </a>
                        </p>
                    </div>
                    <div class="card-footer text-muted">
                        <small>{{$producto->updated_at}}</small>
                    </div>
                  </div>
            </div>
        </div>

    </div>


<br>
    <p><a class="btn btn-lg btn-primary" href="{{route('productos.index')}}"> <i class="fa fa-chevron-circle-left"></i> Regresar </a></p>
</div>





@stop
