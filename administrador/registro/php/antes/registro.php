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
<html>
<head>
	<link rel="stylesheet" href="main.css">
	<meta charset="utf-8">
	<meta name="viewport" conte="widt=device-widt, initial-scale=1.0">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>registro fiscales</title>
</head>
<body>
<form class="form-register" action="../../../BBDD/registro.php" method="POST">
	<h4>Registro</h4>

	<input class="controls" type="text" name="nombre" id="nombre" placeholder="Nombre compelto" required="">
	<input class="controls" type="text" name="apellido" id="apellido" placeholder="Apellido completo" required="">
	<input class="controls" type="text" name="cedula" placeholder="Cedula" required="">
	<input class="controls" type="text" name="telefono" placeholder="Telefono" required="">
	<input class="controls" type="text" name="parada" placeholder="Parada" required="">
	<input class="controls" type="email" name="email" placeholder="Email" required="">
	<input class="controls" type="text" name="id" placeholder="ID" required="">
	<input class="controls" type="password" name="password" placeholder="Contraseña" required="">
	<select name="tipo_usuario" id="">
		<option value="">Selecione el tipo de usuario</option>
		<option value="1">Administrador</option>
		<option value="2">Fiscal</option>
	</select>
	<input class="botons" type="submit" name="registrar">
</form>
	<!--JAVASCRIPT-->
	<script src="main.js"></script>
	<!--fin-->
</body>
</html>