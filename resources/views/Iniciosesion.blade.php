<html>

<head>
    <title>Inicia Sesion</title>
    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!--FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>

    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img" >
                    <img src="Imagenes/avatar.png" alt="Avatar" height="300px" weight="300px">
                </div>
                <form method="POST" class="col-12">
                    @csrf
                    <div class="form-group" id="user-group">
                        <label>
                            <input name="email" type="email" class="form-control" placeholder="Correo electronico">
                        </label>

                    </div>
                    <div class="form-group" id="contrasena-group">
                        <label>
                            <input name="password" type="password" class="form-control" placeholder="Contraseña">
                        </label>
                    </div>
                    <input type="checkbox">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar</button>
                </form>
                <div class="col-12 forgot">
                    <a href="#">Registrate</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
