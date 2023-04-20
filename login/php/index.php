<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form action="../../BBDD/login_verificacion.php" method="POST" class="formularioLogin">

            <div class="user-box">
                <input type="text" name="id" required="">
                <label for="">ID</label>
            </div>

            <div class="user-box">
                <input type="password" name="password" required="">
                <label for="">Contraseña</label>
            </div>

            <input class="botons" type="submit" name="registrar">

        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>