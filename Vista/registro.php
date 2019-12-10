<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Condominio App | Registro Administrador</title>

    <link href="../web/css/bootstrap.min.css" rel="stylesheet">
    <link href="../web/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../web/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="../web/css/animate.css" rel="stylesheet">
    <link href="../web/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h1 class="center logo-name">CA+</h1>

            </div>
            <h3>Registro Condominio App</h3>
            <p>Crear una cuenta para la Gestion de su Condominio</p>
            <form class="m-t" role="form" action="../iniciarSesion.php">
                <div class="form-group">
                    <!--<input type="text" class="form-control" placeholder="nombre" required="">-->
                    <input type="text" class="form-control" placeholder="Digite Nombre Condominio" >
                </div>
                <div class="form-group">
                    <!--<input type="text" class="form-control" placeholder="nombre" required="">-->
                    <input type="text" class="form-control" placeholder="nombre" >
                </div>
                <div class="form-group">
                    <!--<input type="email" class="form-control" placeholder="Email" required="">-->
                    <input type="email" class="form-control" placeholder="Email" >
                </div>
                <div class="form-group">
                    <!--<input type="password" class="form-control" placeholder="Password" required="">-->
                    <input type="password" class="form-control" placeholder="Password" >
                </div>
                <div class="form-group">
                        <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Aceptar Terminos y politicas de calidad </label></div>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Registrar</button>

                <p class="text-muted text-center"><small>Ya tienes una cuenta</small></p>
                <a class="btn btn-sm btn-white btn-block" href="../iniciarSesion.php">Iniciar Sesión</a>
            </form>
            <p class="m-t"> <small>Condominio App &copy; 2019</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>

</html>
