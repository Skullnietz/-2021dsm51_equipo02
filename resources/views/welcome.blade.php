<!DOCTYPE html>
<!-- saved from url=(0052)https://getbootstrap.com/docs/5.0/examples/carousel/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <title>Home</title>





    <!-- Bootstrap core CSS -->
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> --}}
<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="Imagenes/logo.png" sizes="180x180">
<link rel="icon" href="Imagenes/logo.png" sizes="32x32" type="image/png">
<link rel="icon" href="Imagenes/logo.png" sizes="16x16" type="image/png">
<link rel="manifest" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/manifest.json">
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


    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>

<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
        <img src="Imagenes/logo.png" style="height: 20px;">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="https://getbootstrap.com/docs/5.0/examples/carousel/#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://getbootstrap.com/docs/5.0/examples/carousel/#">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="https://getbootstrap.com/docs/5.0/examples/carousel/#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-outline-success me-5 " type="submit">Buscar</button>
          @guest
          <a class="btn btn-outline-info me-2 " href="{{route("Iniciosesion")}}">Ingresar</a>
          @else
          <a class="btn btn-outline-info me-2" href="{{route('productos.index')}}">Regresar</a>
          <a class="btn btn-outline-danger " href="{{route('user.logout')}}">Salir</a>
          @endguest
        </form>
      </div>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Imagenes/hginnminnbanner1.png" alt="Bienvenida" width="100%" height="100%">

        <div class="container">
          <div class="carousel-caption text-start">
              @guest
            <p><a class="btn btn-lg btn-primary" href="{{route("Iniciosesion")}}">Inicia Sesion</a></p>
             @else
             <p><a class="btn btn-lg btn-primary" href="{{route("productos.index")}}">Regresar</a></p>
             @endguest

          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Imagenes/hginnminnbanner2.png" alt="informacion" width="100%" height="100%">

        <div class="container">
          <div class="carousel-caption">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Imagenes/hginnminnbanner3.png" alt="informacion" width="100%" height="100%">

        <div class="container">
          <div class="carousel-caption text-end">
            <h1 style="color:black;"></h1>
            <h3 style="color:black;"> </p>
            <p><a class="btn btn-lg btn-primary" href="https://getbootstrap.com/docs/5.0/examples/carousel/#">Ver Productos</a></h3>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-3">
        <img class="bd-placeholder-img rounded-circle" src="Imagenes/carlos.jpg" width="150" height="150" >

        <h2>Carlos Guizar Peña</h2>
        <p>Jefe de la Organizacion RAVENBYTE.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-3">
        <img class="bd-placeholder-img rounded-circle" src="Imagenes/jairo.jpg" width="150" height="150" >


        <h2>Jairo Padilla Nava</h2>
        <p>Jefe de Desarrollo RAVENBYTE.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-3">
        <img class="bd-placeholder-img rounded-circle" src="Imagenes/aurora.jpg" width="150" height="150" >

        <h2>Aurora Gonzalez </h2>
        <p>Gerente General de RAVENBYTE.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-3">
        <img class="bd-placeholder-img rounded-circle" src="Imagenes/jose.jpg" width="150" height="150" >

        <h2>Jose Ortiz Ortiz</h2>
        <p>Gerente General de RAVENBYTE.</p>

    </div><!-- /.row -->



    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">¿Que es  <span class="text-muted">Huginn & Meninn?</span></h2>
        <p class="lead">Huginn & Meninn es una startup dedicada a los dispositivos de domotica, en el cual los usuarios podran comprar los dispositivos o hacerlos por su cuenta comprando los packs, los cuales contienen componentes e instrucciones arduino para aprender a armarlos.
        </p>
      </div>
      <div class="col-md-5">
        <img src="Imagenes/logo.png" alt="reservalab-logo" width="100%" height="100%">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">¿Quienes somos? <span class="text-muted">RAVENBYTE</span></h2>
        <p class="lead">RAVENBYTE es una creada por tres estudiantes para brindar servicios de programación y desarrollo de sistemas web. Ofreciendo de manera profesional a empresas e instituciones la posibilidad de tener su propio sistema web, Tomando en cuenta las necesidades del cliente otorgando un servicio de calidad superior.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="Imagenes/ravenbyte.jpg" alt="ravenbyte" width="500" height="500">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">¿Donde nos ubicamos? </h2>
        <p class="lead">No te preocupes, nosotros te ponemos el mapa.</p>
      </div>
      <div class="col-md-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1882.631068621372!2d-99.59392270324992!3d19.31442815053587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc31d0de17f724bfb!2sSERVICIO%20FIXWARE!5e0!3m2!1sen!2smx!4v1614744970365!5m2!1sen!2smx" width="500" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="https://getbootstrap.com/docs/5.0/examples/carousel/#">Back to top</a></p>
    <p>© 2019–2021 Company, Inc. · <a href="https://getbootstrap.com/docs/5.0/examples/carousel/#">Privacy</a> · <a href="https://getbootstrap.com/docs/5.0/examples/carousel/#">Terms</a></p>
    <p>Numero de contacto:  722 890 8769</p>
  </footer>
</main>


    <script src="js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>




</body></html>
