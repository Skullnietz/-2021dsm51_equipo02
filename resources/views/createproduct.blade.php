<!DOCTYPE html>
<!-- saved from url=(0052)https://getbootstrap.com/docs/5.0/examples/checkout/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Registro Usuario</title>

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
            const $input1 = document.querySelector('#producto');
            const $input2 = document.querySelector('#costo');
            const $input3 = document.querySelector('#existencias');
            const patron = /[a-zA-Zñ ]+/;
            const patron1 = /[0-9.]+/;

            $input1.addEventListener("keydown", event => {
                console.log(event.key);
                if(patron.test(event.key)){
                    $("#producto").css({ "border": "1px solid #0C0"});
                }
                else{
                    if(event.keyCode==8){ console.log("backspace"); }
                    else{ event.preventDefault();}
                }
            });
            $input2.addEventListener("keydown", event => {
                console.log(event.key);
                if(patron1.test(event.key)){
                    $("#costo").css({ "border": "1px solid #0C0"});
                }
                else{
                    if(event.keyCode==8){ console.log("backspace"); }
                    else{ event.preventDefault();}
                }
            });
            $input3.addEventListener("keydown", event => {
                console.log(event.key);
                if(patron1.test(event.key)){
                    $("#existencias").css({ "border": "1px solid #0C0"});
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
        <h2>Agregar un producto</h2>
      </div>

      <div class="col-lg-7 col-lg-8">
        <h4 class="mb-3">Ingrese sus datos correctamente</h4>
        <form class="needs-validation" novalidate="" action="{{route('productos.store')}}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="row g-3">
            <div class="col-6">
              <label for="firstName" class="form-label">Producto</label>
              <input type="text" class="form-control" id="producto" name="producto" placeholder="Nombre de producto" value="" required="">

              @error('producto')
              <br>
              <small style="color:#F00";>*{{$message}}</small>
              <br>
              @enderror
            </div>


            <div class="col-6">
              <label for="lastName" class="form-label">Costo</label>
              <input type="text" class="form-control" id="costo" name="costo" placeholder="Costo de producto" value="" required="">
                @error('costo')
                <br>
                <small style="color:#F00";>*{{$message}}</small>
                <br>
                @enderror
            </div>

            <div class="col-6">
                <label for="lastName" class="form-label">Imagen</label>
                <input type="file" class="form-control" id="img" name="img" placeholder="Imagen" value="" required="" accept="image/*">
                  @error('img')
                  <br>
                  <small style="color:#F00";>*{{$message}}</small>
                  <br>
                  @enderror
              </div>

              <div class="col-6">
                <label for="lastName" class="form-label">Existencias</label>
                <input type="text" class="form-control" id="existencias" name="existencias" placeholder="Existencias" value="" required="">
                  @error('existencias')
                  <br>
                  <small style="color:#F00";>*{{$message}}</small>
                  <br>
                  @enderror
              </div>

              <div class="col-6">
                <label for="lastName" class="form-label">Descripcion</label>
                <textarea type="text" rows="3" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion" value="" required=""></textarea>
                  @error('primer_apellido')
                  <br>
                  <small style="color:#F00";>*{{$message}}</small>
                  <br>
                  @enderror
              </div>


            <div class="col-md-6">
              <label for="country" class="form-label">Categoria</label>
              <div class="form-check">
                <input id="Dispositivo" name="categoria" type="radio" class="form-check-input" value="Dispositivo" checked="" required="">
                <label class="form-check-label" for="Dispositivo">Dispositivo</label>
              </div>
              <div class="form-check">
                <input id="Componente" name="categoria" type="radio" class="form-check-input" value="Componente" required="">
                <label class="form-check-label" for="Componente">Componente</label>
              </div>
              <div class="form-check">
                <input id="Paquete" name="categoria" type="radio" class="form-check-input" value="Paquete" required="">
                <label class="form-check-label" for="Paquete">Paquete</label>
              </div>

            </div>



          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit" id="bttnfin">Crear producto</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2021 Huginn & Meninn</p>

  </footer>
</div>


<script type="text/javascript">
    document.getElementById("correcto").style.visibility='hidden';
    document.getElementById("bttnfin").style.visibility='hidden';
    function cantidad2(obj){
        var pass1 = document.getElementById("pass1").value;
        var pass2 = document.getElementById("pass2").value;
        if(pass1 == pass2){
            document.getElementById("bttnfin").style.visibility= "visible";
            document.getElementById("correcto").style.visibility= "visible";
        }
        else{
            document.getElementById("bttnfin").style.visibility= "hidden";
            document.getElementById("correcto").style.visibility= "hidden";
        }
    }
        </script>

</body>
</html>
