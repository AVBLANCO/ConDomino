<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Condominio App</title>

        <link href="web/css/bootstrap.min.css" rel="stylesheet">
        <link href="web/font-awesome/css/font-awesome.css" rel="stylesheet">

        <link href="web/css/animate.css" rel="stylesheet">
        <link href="web/css/style.css" rel="stylesheet">

    </head>

    <body class="gray-bg">

        <div class="loginColumns animated fadeInDown">
            <div class="row">

                <div class="col-md-6">
                    <h2 class="font-bold">Bienvenido Condominio App</h2>

                    <br>
                    <br>
                    <br>

                    <p>
                        La Administracion de Condominios Mas Transparente que nunca.
                    </p>

                </div>
                <div class="col-md-6">
                    <div class="ibox-content">
                        <form class="m-t" role="form" action="Vista/principal.php">
                            <div class="form-group">
                                <!--                            required=""-->
                                <input type="email" class="form-control" placeholder="Username" >
                            </div>
                            <div class="form-group">
                                <!--<input type="password" class="form-control" placeholder="Password" required="">-->
                                <input type="password" class="form-control" placeholder="Password">

                            </div>
                            <button type="submit" class="btn btn-primary block full-width m-b">Iniciar Sesion</button>

                            <a href="Vista/olvidoPassword.php">
                                <small>Olvido su Contraseña</small>
                            </a>

                            <p class="text-muted text-center">
                                <small>No Tiene una cuenta?</small>
                            </p>
                            <a class="btn btn-sm btn-white btn-block" href="register.html">Crear una Cuenta Administrador</a>
                        </form>
                        <p class="m-t"  >
                            <small>Condominios App -Apps.co-   &copy; 2019</small>
                        </p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-md-6">
                    Copyright 
                </div>
                <div class="col-md-6 text-right">
                    <small>© 2019</small>
                </div>
            </div>
        </div>

    </body>

</html>
