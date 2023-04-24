<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<title>Planilla de Actividad</title>
</head>

<body>
	<center>
<!--Menu desplegable para historial-->
<select class="historial" id="select-historial">
	<option value="">Historial</option>
  </select>
</center>
<br>
<form id="formulario" class="form-register" action="../../../BBDD/planilla_actividad.php" method="POST">
	<center><h4>Envio de Unidades</h4></center>

	<input class="controls" type="text" name="unidad" id="nombre" placeholder="Numero de unidad" required>

	<select id="Destino" name="destino" class="controls"> 
		<option value="0">SELECCIONAR DESTINO</option>
		<option value="IUTA">IUTA</option>
		<option value="HOSPITAL MILITAR">HOSPITAL MILITAR</option>
		<option value="SAN JACINTO">SAN JACINTO</option>
		<option value="TERMINAL">TERMINAL</option>
		<option value="CHOCHE ARAGUA">COCHE ARAGUA</option>
		<option value="MACRO">MACRO</option>
	</select>

	<select id="Parada" name="parada" class="controls">
		<option value="0">SELECCIONAR PARADA</option>
		<option value="HOSPITAL MILITAR">Coche Aragua</option>
		<option value="SAN JACINTO">Farmatodo</option>
		<option value="TERMINAL">El oso</option>
		<option value="CHOCHE ARAGUA">Banco de Venezuela </option>
		<option value="MACRO">Radio Apolo</option>
	</select>

	<div id="watch">
		<div id="digital"></div>
		<div id="hours"></div>
		<div id="minutes"></div>
		<div id="seconds"></div>
	</div>
	<div id="currentDate"></div>
	<!--Boton de enviar-->
	<input class="botons" type="submit" name="registrar">
	<br>
	<br>
	<select class="historial-paradas" id="select-paradas">
		<option value="">Historial</option>
	  </select>

</form>



	<script src="script.js"></script>
</body>

</html