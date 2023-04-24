<!DOCTYPE html>
<html lang="es">
<head>
    <!--Link Css-->
    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/png" href="../../logo/logo-sin-fondo.ico"/>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--FIN-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicie Sesion</title>
</head>
<body>
    <div class="form_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                    <form action="../../BBDD/login_verificacion.php" method="POST" class="form-horizontal">
                        <div class="form_icon">
                            <i class="fa fa-user-circle">
                            </i>
                        </div>
                        <h3 class="title">Iniciar Sesion</h3>
                        <div class="form-group">
                            <span class="input-icon">
                                <i class="fa fa-user">
                                </i>
                            </span>
                            <input class="form-control" type="text" name="id" placeholder="ID" required>
                        </div>

                        <div class="form-group">
                            <span class="input-icon">
                                <i class="fa fa-lock">
                                </i>
                            </span>
                            <input class="form-control" type="password" name="password" placeholder="contraseña" required>
                        </div>
                        <button class="btn signin" type="submit" name="registrar">Identificarse</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <!--Javascript-->
        <script src="script.js"></script>
</body>
</html>