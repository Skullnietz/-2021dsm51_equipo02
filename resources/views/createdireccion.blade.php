<!DOCTYPE html>
<!-- saved from url=(0052)https://getbootstrap.com/docs/5.0/examples/checkout/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Agregar direccion</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">



    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="Imagenes/logo.png" sizes="180x180">
<link rel="icon" href="Imagenes/logo.png" sizes="32x32" type="image/png">
<link rel="icon" href="Imagenes/logo.png" sizes="16x16" type="image/png">
<link rel="manifest" href="Imagenes/logo.png">
<link rel="mask-icon" href="Imagenes/logo.png" color="#7952b3">
<link rel="icon" href="Imagenes/logo.png">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


        <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>  <!-- Jquery - Funciones -->
        <script src="{{ asset('js/jquery-ui.js') }}"></script>     <!-- Jquery - Theme -->
    <script type="text/javascript">

$(document).ready(function(){
            const $input1 = document.querySelector('#codigopostal');
            const $input2 = document.querySelector('#Telefono');
            const $input3 = document.querySelector('#calle');
            const $input4 = document.querySelector('#Indicaciones');
            const patron = /[a-zA-Zñ ]+/;
            const patron2 = /[a-zA-Zñ ,0-9-]+/;
            const patron1 = /[0-9.]+/;

            $input1.addEventListener("keydown", event => {
                console.log(event.key);
                if(patron1.test(event.key)){
                    $("#codigopostal").css({ "border": "1px solid #0C0"});
                }
                else{
                    if(event.keyCode==8){ console.log("backspace"); }
                    else{ event.preventDefault();}
                }
            });
            $input2.addEventListener("keydown", event => {
                console.log(event.key);
                if(patron1.test(event.key)){
                    $("#Telefono").css({ "border": "1px solid #0C0"});
                }
                else{
                    if(event.keyCode==8){ console.log("backspace"); }
                    else{ event.preventDefault();}
                }
            });
            $input3.addEventListener("keydown", event => {
                console.log(event.key);
                if(patron1.test(event.key)){
                    $("#calle").css({ "border": "1px solid #0C0"});
                }
                else{
                    if(event.keyCode==8){ console.log("backspace"); }
                    else{ event.preventDefault();}
                }
            });
            $input4.addEventListener("keydown", event => {
                console.log(event.key);
                if(patron2.test(event.key)){
                    $("#Indicaciones").css({ "border": "1px solid #0C0"});
                }
                else{
                    if(event.keyCode==8){ console.log("backspace"); }
                    else{ event.preventDefault();}
                }
            });
        })


        </script>

  </head>
  <body class="bg-light">

<div class="container">
  <main>

     <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="Imagenes/logo.png" alt="" width="200" height="200" href="{{route('inicio')}}">
        <h2>Agregar una direccion</h2>
      </div>

      <div class="col-lg-7 col-lg-8">
        <h4 class="mb-3">Ingrese sus datos correctamente</h4>
        <form class="needs-validation" novalidate="" action="{{route('direccions.store')}}" method="post" enctype="multipart/form-data">
            {{-- <form class="needs-validation" novalidate="" action="{{route('productos.store')}}" method="post" enctype="multipart/form-data"> --}}
            @csrf
          <div class="row g-3">

            <div class="col-md-6">
                <label for="state" class="form-label">Estado</label>
                <select class="form-select" id="state" name="state_id" required="">
                    <option value="">Seleccionar Estado</option>
                    @foreach($states as $state)
                  <option value="{{$state->id}}">{{$state->name}}</option>
                  @endforeach
                </select>
                @error('state_id')
                  <br>
                  <small style="color:#F00";>*{{$message}}</small>
                  <br>
                  @enderror

              </div>

              <div class="col-md-6">
                <label for="town" class="form-label">Ciudad</label>
                <select class="form-select" id="town" name="town_id" required="">
                  <option value="">Seleccione un estado antes</option>
                </select>
                @error('town_id')
                  <br>
                  <small style="color:#F00";>*{{$message}}</small>
                  <br>
                  @enderror

              </div>

              <div class="col-4">
                <label for="CP" class="form-label">Codigo Postal</label>
                <input type="text" class="form-control" id="codigopostal" name="CP" placeholder="Codigo Postal" value="" required="">

                @error('CP')
                <br>
                <small style="color:#F00";>*{{$message}}</small>
                <br>
                @enderror
              </div>
              <div class="col-4">
                <label for="Calle" class="form-label">Calle</label>
                <input type="text" class="form-control" id="calle" name="Calle" placeholder="Calle" value="" required="">

                @error('Calle')
                <br>
                <small style="color:#F00";>*{{$message}}</small>
                <br>
                @enderror
              </div>
              <div class="col-4">
                <label for="Telefono" class="form-label">Telefono o Celular</label>
                <input type="text" class="form-control" id="Telefono" name="Telefono" placeholder="Inserte su numero" value="" required="">

                @error('Telefono')
                <br>
                <small style="color:#F00";>*{{$message}}</small>
                <br>
                @enderror
              </div>
              <div class="col-6">
                <label for="Indicaciones" class="form-label">Indicaciones Adicionales</label>
                <textarea type="text" rows='3' class="form-control" id="Indicaciones" name="Indicaciones" placeholder="Referencias para llegar al domicilio" value="" required=""></textarea>

                @error('Indicaciones')
                <br>
                <small style="color:#F00";>*{{$message}}</small>
                <br>
                @enderror

              </div>
              {{-- <form class="needs-validation" novalidate="" action="{{route('users.update', Auth::user() )}} " method="post">
                @csrf @method('PATCH')
              <div class="row g-3">
                </div>
                <div class="col-12">
                    <input type="text" class="form-control" id="direccion_id" name="direccion_id"  value="{{$direccion->id}}">

                      @error('email')
                      <br>
                      <small style="color:#F00";>*{{$message}}</small>
                      <br>
                      @enderror --}}


                  </div>



                </div>

                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">




          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit" id="bttnfin">Agregar direccion</button>


        {{-- </form> --}}
    </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2021 Huginn & Meninn</p>

  </footer>
</div>


<script type="text/javascript">
    $(document).ready(function(){
        $(function(){
            $('#state').on('change', onSelectStateChange);
         });

         function onSelectStateChange(){
             var state_id = $(this).val();

             $.get('/FlutterySanctum/api/public/states/'+state_id+'/towns', function (data) {
                 var html_select = '<option value="">Seleccione su Ciudad</option>';
                 for (var i=0; i<data.length; ++i)
                 html_select += '<option value="'+data[i].id+'">'+data[i].name+'</option>';
                 $('#town').html(html_select);

                });

         }

    })
        </script>

</body>
</html>
