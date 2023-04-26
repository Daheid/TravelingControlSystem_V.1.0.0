<?php
//Verificacion de sesion en cuenta
    session_start();

    include("../../../BBDD/conexion_BBDD.php");

    $usuarios = "SELECT * FROM usuarios";

    if(isset($_SESSION['nombre'])){
        echo ' ';
    }

    if(!isset($_SESSION['id'])){

        echo '
            <script>
            alert("inicie sesion");
            window.location = "../../../login/php/index.php";
            </script>
        ';


        session_destroy();
        die();
    };
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="x-ua-compatible" content="ie-edge">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="shortcut icon" type="image/png" href="../../../logo/logo-sin-fondo.ico"/>
        <title>Menu administrador</title>
    </head>

    <body>
        <div class="form-box">

            <?php 
                $resultado = mysqli_query($mysqli, $usuarios); 

                if($row = mysqli_fetch_assoc($resultado)){
            ?>

            <h2>Bienvenido Administrador <?php echo 'N° ',$_SESSION['id'], ' ', $_SESSION['nombre'];?></h2>

            <?php 
                };  
                mysqli_free_result($resultado);
            ?>

            <div class="button-container">
                <button><a href="../../registro/php/registro.php">Registro de usuario</a></button>
                <button><a href="../../registro_encavas/php/registro_encava.php">Registro encava</a></button>
                <button><a href="../../reporte/php/reporte.php">Reportes</a></button>
                <button><a href="../../planilla_actividad/php/planilla_actividad.php">Planilla de actividad</a></button>
                <button><a href="../../usuarios/php/usuarios.php">Usuarios registrados</a></button>
                <button><a href="../../encavas/php/encavas.php">Encavas Registradas</a></button>
            </div>
            <button><a href="../../../BBDD/cierre_sesion.php">Cerrar sesion</a></button>
        </div>
    </body>
</html>
