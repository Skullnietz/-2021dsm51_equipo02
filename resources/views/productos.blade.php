@extends('dashboard')
@section('title')
Productos
@endsection
@section('content')
<script src="{{ asset('js/jquery-3.3.1.js') }}"></script>  <!-- Jquery - Funciones -->
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script>
    $(document).ready(function(){
        $("#btncomponentes").addClass("btn btn-secondary my-2");
        $("#btnpaquetes").addClass("btn btn-secondary my-2");
        $("#btndispositivos").addClass("btn btn-secondary my-2");
        $("#btntodos").addClass("btn btn-primary my-2");
		$("#dispositivos").hide();
        $("#componentes").hide();
        $("#paquetes").hide();
        $("#todos").show();


	});
</script>
<section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Productos</h1>
      <p>
        <button class="btn btn-secondary my-2" id="btntodos">Todos</button>
        <button class="btn btn-secondary my-2" id="btndispositivos" >Dispositivos</button>
        <button class="btn btn-secondary my-2" id="btncomponentes">Componentes</button>
        <button class="btn btn-secondary my-2" id="btnpaquetes">Paquetes</button>
      </p>
    </div>
  </section>
  <div class="album  bg-light" >
    <div class="container">
      <div class="row" id="todos">

        @foreach($productos as $producto)
        <div class="col-4">
            {{-- click para ver producto --}}
            <a href="{{route('productos.show', $producto->id)}}">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="Imagenes/{{$producto->img}}" data-holder-rendered="true" width="200" height="200">

        </a>
        <br>
            <center><h3>$ {{$producto->costo}} </h3><small>MXN</small></center>
            <div class="card-body">
              <h4 class="card-text text-center">{{$producto->producto}}</h4>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group col-md-12">
                  <a type="button" class="btn btn-lg btn-secondary" href="{{route('productos.show', $producto->id)}}"><i class="fa fa-eye"></i>  Ver</a>
                  <button type="button" class="btn btn-lg btn-outline-secondary"><i class="fa fa-shopping-cart"></i>  Agregar</button>
            </div>
          </div>
        </div>
    </div>
</div>
@endforeach
</div>
</div>
<div class="album  bg-light" >
    <div class="container">
      <div class="row" id="dispositivos">

        @foreach($dispositivos as $dispositivo)
        <div class="col-4">
            {{-- click para ver --}}
            <a href="{{route('productos.show', $dispositivo->id)}}">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="Imagenes/{{$dispositivo->img}}" data-holder-rendered="true" width="200" height="200">

        </a>
        <br>
            <center><h3>$ {{$dispositivo->costo}} </h3><small>MXN</small></center>
            <div class="card-body">
              <h4 class="card-text text-center">{{$dispositivo->producto}}</h4>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group col-md-12">
                  <a type="button" class="btn btn-lg btn-secondary" href="{{route('productos.show', $dispositivo->id)}}"><i class="fa fa-eye"></i>  Ver</a>
                  <button type="button" class="btn btn-lg btn-outline-secondary"><i class="fa fa-shopping-cart"></i>  Agregar</button>
            </div>
          </div>
        </div>
    </div>
</div>
@endforeach
</div>

</div>
<div class="album  bg-light" >
    <div class="container">
      <div class="row" id="componentes">

        @foreach($componentes as $componente)
        <div class="col-4">
            {{-- click para ver --}}
            <a href="{{route('productos.show', $componente->id)}}">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="Imagenes/{{$componente->img}}" data-holder-rendered="true" width="200" height="200">

        </a>
        <br>
            <center><h3>$ {{$componente->costo}} </h3><small>MXN</small></center>
            <div class="card-body">
              <h4 class="card-text text-center">{{$componente->producto}}</h4>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group col-md-12">
                  <a type="button" class="btn btn-lg btn-secondary" href="{{route('productos.show', $componente->id)}}"><i class="fa fa-eye"></i>  Ver</a>
                  <button type="button" class="btn btn-lg btn-outline-secondary"><i class="fa fa-shopping-cart"></i>  Agregar</button>
            </div>
          </div>
        </div>
    </div>
</div>
@endforeach
</div>

</div>
<div class="album  bg-light" id="paquetes">
    <div class="container">
      <div class="row">

        @foreach($paquetes as $paquete)
        <div class="col-4">
            {{-- click para ver --}}
            <a href="{{route('productos.show', $paquete->id)}}">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="Imagenes/{{$paquete->img}}" data-holder-rendered="true" width="200" height="200">

        </a>
        <br>
            <center><h3>$ {{$paquete->costo}} </h3><small>MXN</small></center>
            <div class="card-body">
              <h4 class="card-text text-center">{{$paquete->producto}}</h4>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group col-md-12">
                  <a type="button" class="btn btn-lg btn-secondary" href="{{route('productos.show', $paquete->id)}}"><i class="fa fa-eye"></i>  Ver</a>
                  <button type="button" class="btn btn-lg btn-outline-secondary"><i class="fa fa-shopping-cart"></i>  Agregar</button>
            </div>
          </div>
        </div>
    </div>
</div>
@endforeach
</div>

</div>

<script>
    $(document).ready(function(){
        $("#btntodos").click(function(){
		$("#btncomponentes").removeClass(" btn-primary ");
        $("#btnpaquetes").removeClass(" btn-primary ");
        $("#btndispositivos").removeClass(" btn-primary ");
        $("#btntodos").addClass(" btn-primary ");
		$("#dispositivos").hide();
        $("#componentes").hide();
        $("#paquetes").hide();
        $("#todos").show();
	});
    $("#btncomponentes").click(function(){
		$("#btncomponentes").addClass(" btn-primary ");
        $("#btnpaquetes").removeClass(" btn-primary ");
        $("#btndispositivos").removeClass(" btn-primary ");
        $("#btntodos").removeClass(" btn-primary ");
		$("#dispositivos").hide();
        $("#componentes").show();
        $("#paquetes").hide();
        $("#todos").hide();
	});
    $("#btnpaquetes").click(function(){
		$("#btncomponentes").removeClass(" btn-primary ");
        $("#btnpaquetes").addClass(" btn-primary ");
        $("#btndispositivos").removeClass(" btn-primary ");
        $("#btntodos").removeClass(" btn-primary ");
		$("#dispositivos").hide();
        $("#componentes").hide();
        $("#paquetes").show();
        $("#todos").hide();
	});
    $("#btndispositivos").click(function(){
		$("#btncomponentes").removeClass(" btn-primary ");
        $("#btnpaquetes").removeClass(" btn-primary ");
        $("#btndispositivos").addClass(" btn-primary ");
        $("#btntodos").removeClass(" btn-primary ");
		$("#dispositivos").show();
        $("#componentes").hide();
        $("#paquetes").hide();
        $("#todos").hide();
	});

});
</script>






@endsection
