<?php

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" conte="widt=device-widt, initial-scale=1.0">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>registro fiscales</title>
</head>
<body>
<header>
	<div id="container">
		<nav>
			<ul>
				<li><a href="../../planilla_actividad/php/planilla_actividad.php" class="a" id="inicio">Planilla de Actividad</a></li>
				<li><a href="#" class="a">Reportes</a></li>
				<li><a href="../../../BBDD/cierre_sesion.php">Cerrar sesión</a></li> 
			</ul>
		</nav>
	</div>
</header>


<form class="form-register" action="../../../BBDD/reporte.php" method="POST">
	<h4>Reportes</h4>
	<input class="controls" type="text" name="nombres" id="nombre" placeholder="Nombre y apellido">
	<input class="controls" type="text" name="correo" id="apellido" placeholder="Correo">
	<input class="controls" type="text" name="asunto" placeholder="Asunto">
	<textarea class="controls"  type="text" name="reporte" placeholder="Detalles del reporte" cols="30" rows="10"></textarea>
	
		<input class="botons" type="submit" name="registrar">
</form>
</body>
</html>