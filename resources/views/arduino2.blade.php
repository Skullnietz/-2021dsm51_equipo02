@extends('dashboard')
@section('title')
Arduino 2
@endsection
@section('content')
<style>
    .btn-circle.btn-xl {
    width: 70px;
    height: 70px;
    padding: 10px 16px;
    border-radius: 35px;
    font-size: 24px;
    line-height: 1.33;
}

.btn-circle {
    width: 30px;
    height: 30px;
    padding: 6px 0px;
    border-radius: 15px;
    text-align: center;
    font-size: 12px;
    line-height: 1.42857;
}
</style>
<script>

</script>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Arduino 2</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
      </div>
      <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
        This week
      </button>
    </div>


  </div>
  <div class="album  bg-light" >
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="Imagenes/cocheraautomatica.png" data-holder-rendered="true" width="200" height="200">
                    <br>
                    <h3 class="text-center">Cochera Automatica</h3>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group col-md-12">

                                <button type="button" class="btn btn-success btn-square btn-xl"><SMALL>ON</SMALL></i>
                                </button>
                            <button type="button" class="btn btn-success btn-circle btn-xl"><i class="fa fa-toggle-on"></i>
                                <br>
                            </button>

                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group col-md-12">


                    <button type="button" class="btn btn-danger btn-square btn-xl"><SMALL>OFF</SMALL></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-circle btn-xl"><i class="fa fa-toggle-off"></i>
                    </button>
    </div>
    </div>
        </div>

    </div>
  </div>
  {{-- Principio de tarjeta --}}
  <div class="col-4">
    <div class="card mb-4 box-shadow">
        <img class="card-img-top" src="Imagenes/termometro.png" data-holder-rendered="true" width="200" height="200">
        <br>
        <h3 class="text-center">Termometro</h3>
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group col-md-12">

                    <button type="button" class="btn btn-success btn-square btn-xl"><SMALL>ON</SMALL></i>
                    </button>
                <button type="button" class="btn btn-success btn-circle btn-xl"><i class="fa fa-toggle-on"></i>
                    <br>
                </button>

    </div>
    </div>
    <div class="d-flex justify-content-between align-items-center">
    <div class="btn-group col-md-12">


        <button type="button" class="btn btn-danger btn-square btn-xl"><SMALL>OFF</SMALL></i>
        </button>
        <button type="button" class="btn btn-danger btn-circle btn-xl"><i class="fa fa-toggle-off"></i>
        </button>
    </div>
    </div>
    </div>
    </div>

</div>
{{-- Final de tarjeta --}}
    </div>
</div>
</div>

@endsection
