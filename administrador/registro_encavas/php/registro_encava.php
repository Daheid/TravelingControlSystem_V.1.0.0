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
    <title>Registro de encavas</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <!--Menu-->
    <header> 
        <nav>
            <a href="#"><img class="logo" src="../../../logo/logo-sin-fondo.jpeg" alt="logo"></a>

            <ul class="enlaces-menu">
                <li><a href="../../registro/php/registro.php">Registro de Usuarios</a></li>
                <li><a href="../../reporte/php/reporte.php">Reportes</a></li>
				<li><a href="">Planilla de actividad</a></li>
				<li><a href="../../usuarios/php/usuarios.php">Usuarios</a></li>
				<li><a href="../../encavas/php/encavas.php">Encavas</a></li>
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

    <!-- Registro encava-->
	<div class="general">
		<form id="formulario" class="form-register" action="../../../BBDD/registro_encava.php" method="POST">
			<h4>Registro de encavas</h4>

			<input class="controls" type="text" name="numero" id="numero" placeholder="Numero de la encava" required>
			<input class="controls" type="text" name="placa" id="placa" placeholder="Placa de la encava" required>
			<input class="controls" type="text" name="dueno" id="dueno" placeholder="Dueño de la encava" required>
			
			<!--Boton de enviar-->
			<input class="botons" type="submit" name="registrar" class="btn-blue custom-btn" value="Enviar">
		</form>
	</div>
	<!--FIN DE REGISTRO DE Enacava-->
	
    <!--JAVASCRIPT-->
    <script src="main.js"></script>
	<!--fin-->
</body>
</html>
