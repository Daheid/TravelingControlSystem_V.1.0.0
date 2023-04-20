<?php

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" conte="widt=device-widt, initial-scale=1.0">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<title>Planilla de Actividad</title>
</head>

<body>
<script src="script.js"></script>

<header>
	<div id="container">
		<nav>
			<ul>
				<li><a href="#" class="a" id="inicio">Planilla de Actividad</a></li>
				<li><a href="../../reporte/php/reporte.php" class="a">Reportes</a></li>
				<li><a href="../../../BBDD/cierre_sesion.php">Cerrar sesión</a></li> 
			</ul>
		</nav>
	</div>
</header>

<form class="form-register" action="../../../BBDD/planilla_actividad.php" method="POST">
	<h4>Planilla de actividad</h4>

	<input class="controls" type="text" name="unidad" id="nombre" placeholder="Numero de unidad" require>
	
	<!--Convertir a lista de cascada-->
	<!--<input class="controls" type="text" name="apellidos" id="apellido" placeholder="destino"> -->
	<select id="Destino" name="destino" class="controls"> 
		<option value="0">SELECCIONAR DESTINO</option>
		<option value="Av bolivar">Av Bolivar</option>
		<option value="Terminal">TERMINAL</option>
	</select>
	<!--FIN-->

	<!--Convertir a lista de cascada-->
	<select id="Parada" name="parada" class="controls">
		<option value="0">SELECCIONAR PARADA</option>
		<option value="Iuta">IUTA</option>
		<option value="Hospital Militar">HOSPITAL MILITAR</option>
		<option value="San Jacinto">SAN JACINTO</option>
		<option value="Terminal">TERMINAL</option>
		<option value="Coche Aragua">COCHE ARAGUA</option>
		<option value="Macro">MACRO</option>
	</select>
	<!--FIN-->
	
	<!--coincidan con la hora y fecha del dispositivo-->
	<input type="date" id="fecha" class="controls" name="fecha" required readonly  value="<?php echo date('Y-m-d'); ?>">
	<input type="time" id="hora" class="controls" name="hora" required readonly  value="<?php echo date('H:i'); ?>">
	<!--FIN-->

	<!--Boton de actualizar hora-->
	<input type="button" class="botons-hora" onclick="actualizarFechaHora()" class="btn-blue custom-btn" value="Actualizar fecha y hora">
	<!--FIN-->
	
	<!--Boton de enviar-->
	<input class="botons" type="submit" name="registrar">


</form>
</body>
</html>
