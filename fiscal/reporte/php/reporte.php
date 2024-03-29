<?php
//Verificacion de sesion en cuenta
	session_start();

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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../../../logo/logo-sin-fondo.ico"/>
    <title>Levantar Reporte</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <!--Menu-->
    <header> 
        <nav>
            <a href="#"><img class="logo" src="" alt="logo"></a>

            <ul class="enlaces-menu">
                <li><a href="../../planilla_actividad/php/planilla_actividad.php">Planilla actividad</a></li>
                <li><a href="#">Reportes</a></li>
                <li><a href="../../../BBDD/cierre_sesion.php">cerrar sesion</a></li>
            </ul>

            <button class="ham" type="button">   
                <span class="br-1"></span>
                <span class="br-2"></span>
                <span class="br-3"></span>
            </button>                       
        </nav>
    </header>
	<!--FIN MENU -->

    <!--REPORTE-->
	
	<form class="form-register" action="../../../BBDD/reporte.php" method="POST">
		<h4>Reportes</h4>
		<input class="controls" type="text" name="nombres" id="nombre" placeholder="Nombre y apellido">
		<input class="controls" type="text" name="correo" id="apellido" placeholder="Correo">
		<input class="controls" type="text" name="asunto" placeholder="Asunto">
		<textarea class="controls"  type="text" name="reporte" placeholder="Detalles del reporte" cols="30" rows="10"></textarea>
		
			<input class="botons" type="submit" name="registrar">
	</form>
	<!--FIN DE REPORTE-->

    <!--JAVASCRIPT-->
    <script src="main.js"></script>
	<!--fin-->
</body>
</html>
