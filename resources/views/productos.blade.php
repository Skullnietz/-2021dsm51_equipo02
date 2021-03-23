@extends('dashboard')
@section('title')
Productos
@endsection
@section('content')
<section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Productos</h1>
      <p>
        <a href="#" class="btn btn-primary my-2">Dispositivos</a>
        <a href="#" class="btn btn-secondary my-2">Componentes</a>
        <a href="#" class="btn btn-secondary my-2">Paquetes</a>
      </p>
    </div>
  </section>
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        @foreach($productos as $producto)
        <div class="col-4">
            {{-- click para ver --}}
            <a href="#">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="Imagenes/{{$producto->img}}" data-holder-rendered="true" width="200" height="200">

        </a>
        <br>
            <center><h3>$ {{$producto->costo}} </h3><small>MXN</small></center>
            <div class="card-body">
              <p class="card-text">{{$producto->producto}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a type="button" class="btn btn-sm btn-outline-secondary" href="{{route('productos.show', $producto->id)}}">Ver</a>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
            </div>
          </div>
        </div>
    </div>
</div>
@endforeach
</div>

</div>







@endsection
