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
                $("#pass1").keyup(function(){
                var pass= $("#pass1").val();
                var pattern= new RegExp("(?=.*\d.*\d)(?=.*[\W_].*[\W_])(?=.*[A-Z])(?=.*[a-z].*[a-z]).+");
                var len1 = new RegExp("^(?=.{8,})");
                var len2 = new RegExp("^(?=.{6,})");
                var len3 = new RegExp("^(?=.{4,})");

                if(len1.test(pass)){
                    $("#spass1").text("Segura").css("color", "green");
                    $("#pass1").css({ "border":"1px solid #0F0"}).fadeIn(2000);
                }else{
                    if (len2.test(pass)){
                        $("#spass1").text("Poco segura").css("color", "yellow");
                    }else{
                        if(len3.test(pass)){
                            $("#pass1").css({ "border":"1px solid #0F0"}).fadeIn(2000);
                            $("#spass1").text("Insegura").css("color", "red");
                        }else{
                            if(pattern.test(pass)){
                                $("#pass1").css({ "border":"1px solid #0F0"}).fadeIn(2000);
                                $("#spass1").text("Segura").css("color", "green");
                            }else{
                                $("#pass1").css({ "border":"1px solid #F00"}).fadeIn(2000);
                                $("#spass1").text("Su contraseña no cumple con los estandares, 1 minuscula, mayusculas, 1 numero y un caracter especial").css("color", "red");
                            }
                        }
                    }
                }
            });

                $("#pass2").keyup(function(){
                var txtpass1 = $("#pass1").val();
                var txtpass2 = $("#pass2").val();
                console.log(txtpass1,txtpass2);
                if(txtpass1 == txtpass2){
                    $("#spass2").text("Correcto").css("color", "green");
                    $("#pass2").css({ "border":"1px solid #0F0"}).fadeIn(2000);
                    $("#bttnfin").prop("disabled", false);
                }
                else{
                    $("#spass2").text("Incorrecto").css("color", "red");
                    $("#pass2").css({ "border":"1px solid #F00"}).fadeIn(2000);
                    $("#bttnfin").prop("disabled", true);
                }
            });

            const $input1 = document.querySelector('#nombre');
            const $input2 = document.querySelector('#app');
            const $input3 = document.querySelector('#apm');
            const patron = /[a-zA-Zñ ]+/;

            $input1.addEventListener("keydown", event => {
                console.log(event.key);
                if(patron.test(event.key)){
                    $("#nombre").css({ "border": "1px solid #0C0"});
                }
                else{
                    if(event.keyCode==8){ console.log("backspace"); }
                    else{ event.preventDefault();}
                }
            });
            $input2.addEventListener("keydown", event => {
                console.log(event.key);
                if(patron.test(event.key)){
                    $("#app").css({ "border": "1px solid #0C0"});
                }
                else{
                    if(event.keyCode==8){ console.log("backspace"); }
                    else{ event.preventDefault();}
                }
            });
            $input3.addEventListener("keydown", event => {
                console.log(event.key);
                if(patron.test(event.key)){
                    $("#apm").css({ "border": "1px solid #0C0"});
                }
                else{
                    if(event.keyCode==8){ console.log("backspace"); }
                    else{ event.preventDefault();}
                }
            });

            $("#mail").blur(function(){
                var txtmail = $("#mail").val();
                var valmail = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
                if(valmail.test(txtmail)){ $("#smail").text("Valido").css("color", "green");
                $("#mail").css({ "border":"1px solid #0F0"}).fadeIn(2000);}
                else{$("#smail").text("Incorrecto").css("color", "red");
                $("#mail").css({ "border":"1px solid #F00"}).fadeIn(2000);}
            });

            $("#fn").blur(function(){
                var f = new Date();
                var year = f.getFullYear();
                var mond = f.getMonth();
                var day = f.getDate();

                var fecha = $("#fn").val();

                if(fecha != ''){
                    var fecha2 = fecha.split("-");
                    var edad =  year - fecha2[0];
                    if(edad>17){ $("#sfecha").text("Correcto " + edad +" años").css({ "color": "1px solid #0C0"});
                    $("#fn").css({ "border":"1px solid #0F0"}).fadeIn(2000);}
                    else{ $("#sfecha").text("¿Usted es menor de edad? " + edad +" años").css({ "color": "1px solid #C00"});
                    $("#fn").css({ "border":"1px solid #FF0"}).fadeIn(2000); }
                }
                else{ $("#sfecha").text("Indique una fecha").css("color", "red");
                $("#fn").css({ "border":"1px solid #F00"}).fadeIn(2000); }
            });

            })
        </script>

  </head>
  <body class="bg-light">

<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="Imagenes/logo.png" alt="" width="200" height="200" href="{{route('inicio')}}">
      <h2>Registro de usuario</h2>
      <p class="lead">Bienvenido al formulario de registro Huginn&Meninn, aqui podra crear su usuario para acceder a la plataforma.</p>
    </div>


      <div class="col-lg-7 col-lg-8">
        <h4 class="mb-3">Ingrese sus datos correctamente</h4>
        <form class="needs-validation" novalidate="" action="{{route('users.store')}}" method="post">
            @csrf
          <div class="row g-3">
            <div class="col">
              <label for="firstName" class="form-label">Nombre(s)</label>
              <input type="text" class="form-control" id="nombre" name="name" placeholder="Tu nombre" value="" required="">

              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col">
              <label for="lastName" class="form-label">Primer Apellido</label>
              <input type="text" class="form-control" id="app" name="primer_apellido" placeholder="Tu Primer Apellido" value="" required="">
              <span id="sapp" class="sapp">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
                        <div class="col">
              <label for="lastName" class="form-label">Segundo Apellido<span class="text-muted"> (Opcional)</span></label>
              <input type="text" class="form-control" id="apm" name="segundo_apellido" placeholder="Tu Segundo Apellido" value="" required="">
              <span id="sapm" class="sapm">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>




            <div class="col-12">
              <label for="email" class="form-label" >Email </label>
              <input type="email" class="form-control" id="mail" name="email" placeholder="correo@dominio.com">
              <span id="smail" class="smail">


            </div>

            <div class="col-md-6">
              <label for="address" class="form-label">Contraseña</label>
              <input type="text" class="form-control" id="pass1" name="password" placeholder="contraseña" onkeyup="cantidad1(this);">
              <span id="spass1" class="spass1">
              <b id="cantidad"></b>
              <b id="seguro"></b>

            </div>

            <div class="col-md-6">
              <label for="address2" class="form-label">Confrimar contraseña</label>
              <input type="text" class="form-control" id="pass2" placeholder="contraseña" onkeyup="cantidad2(this);">
              <span id="spass2" class="spass2">
              <img src="{{ asset('Imagenes/paloma.gif') }}" id="correcto" width="20">
            </div>

            <div class="col-md-6">
              <label for="country" class="form-label">Sexo</label>
              <div class="form-check">
                <input id="Masculino" name="sexo" type="radio" class="form-check-input" value="Masculino" checked="" required="">
                <label class="form-check-label" for="Masculino">Masculino</label>
              </div>
              <div class="form-check">
                <input id="Femenino" name="sexo" type="radio" class="form-check-input" value="Femenino" required="">
                <label class="form-check-label" for="Femenino">Femenino</label>
              </div>
              <div class="form-check">
                <input id="indefinido" name="sexo" type="radio" class="form-check-input" value="Indefinido" required="">
                <label class="form-check-label" for="Indefinido">Indefinido</label>
              </div>
            </div>

            <div class="col-md-6">
              <label for="state" class="form-label">Perfil</label>
              <select class="form-select" id="state" name="perfil" required="">
                <option >Seleccionar...</option>
                <option value="Empleado">Empleado</option>
                <option value="Cliente">Usuario</option>
              </select>
              <div class="invalid-feedback">
                Ingrese una opcion.
              </div>
            </div>

            <div class="col-md-12">
            <div class="form-group row">
                <label for="example-date-input" class=" col-form-label">Fecha de nacimiento</label>
                <div></div>
                <div class="col-10">
                  <input class="form-control" id="fn" name="fecha_nacimiento" type="date" value="" >
                  <span id="sfecha" class="sfecha">
                </div>
            </div>




          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit" id="bttnfin">Finalizar registro</button>
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
