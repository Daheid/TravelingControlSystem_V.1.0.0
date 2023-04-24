<?php

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" conte="widt=device-widt, initial-scale=1.0">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<title>registro fiscales</title>
	<link rel="stylesheet"  href="style.css">
</head>

<body>
    <!--Menu-->
    <header> 
        <nav>
            <a href="#"><img class="logo" src="" alt="logo"></a>

            <ul class="enlaces-menu">
                <li><a href="#">Levantar Reporte</a></li>
                <li><a href="../../reporte/php/reporte.php">Reportes</a></li>
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

	

	<form class="form-register" action="../../../BBDD/reporte.php" method="POST">
		<h4>Reportes</h4>
		<input class="controls" type="text" name="nombres" id="nombre" placeholder="Nombre y apellido">
		<input class="controls" type="text" name="correo" id="apellido" placeholder="Correo">
		<input class="controls" type="text" name="asunto" placeholder="Asunto">
		<textarea class="controls"  type="text" name="reporte" placeholder="Detalles del reporte" cols="30" rows="10"></textarea>
		
			<input class="botons" type="submit" name="registrar">
	</form>

	<!--JAVASCRIPT-->
	<script src="main.js"></script>
</body>
</html>