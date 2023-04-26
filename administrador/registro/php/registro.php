<?php
//Verificacion de sesion en cuenta

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../../../logo/logo-sin-fondo.ico"/>
    <title>Registro de usuarios</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <!--Menu-->
    <header> 
        <nav>
            <a href="#"><img class="logo" src="../../../logo/logo-sin-fondo.jpeg" alt="logo"></a>

            <ul class="enlaces-menu">
                <li><a href="../../registro_encavas/php/registro_encava.php">Registro de encava</a></li>
                <li><a href="../../reporte/php/reporte.php">Reportes</a></li>
				<li><a href="../../planilla_actividad/php/planilla_actividad.php">Planilla de actividad</a></li>
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

    <!--Planilla actividad-->

		<form id="formulario" class="form-register" action="../../../BBDD/registro.php" method="POST">
			<h4>Registro de usuarios</h4>

			<input class="controls" type="text" name="nombre" id="nombre" placeholder="Nombre completo" required>
			<input class="controls" type="text" name="apellido" id="apellido" placeholder="Apellido completo" required>
			<input class="controls" type="number" name="cedula" id="cedula" placeholder="Documento de identidad" required>
			<input class="controls" type="number" name="telefono" id="telefono" placeholder="Numero celular" required>
			<input class="controls" type="email" name="email" id="email" placeholder="Correo electronico" required>
			<input class="controls" type="password" name="password" id="password" placeholder="Contraseña" required>
			<input class="controls" type="text" name="id" id="id" placeholder="ID" required>


			<select id="tipo_usuario" name="tipo_usuario" class="controls"> 
				<option value="0">Seleccionar tipo de usuario</option>
				<option value="1">Administrador</option>
				<option value="2">Fiscal</option>
			</select>
			
			<!--Boton de enviar-->
			<input class="botons" type="submit" name="registrar" onclick="actualizarFechaHora()" class="btn-blue custom-btn" value="Enviar">
		</form>

	<!--FIN DE REGISTRO DE USUARIOS-->
	
    <!--JAVASCRIPT-->
    <script src="main.js"></script>
	<!--fin-->
</body>
</html>
