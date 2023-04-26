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
    <title>Planilla actividad</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <!--Menu-->
    <header> 
        <nav>
            <a href="#"><img class="logo" src="../../../logo/logo-sin-fondo.jpeg" alt="logo"></a>

            <ul class="enlaces-menu">
                <li><a href="#">Planilla actividad</a></li>
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

    <!--Planilla actividad-->
<div class="general">
	<form id="formulario" class="form-register" action="../../../BBDD/planilla_actividad.php" method="POST">
		<h4>Envio de Unidades</h4>

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
			<option value="coche aragua">Coche Aragua</option>
			<option value="farmatodo">Farmatodo</option>
			<option value="el oso">El oso</option>
			<option value="Banco de Venezuela">Banco de Venezuela </option>
			<option value="Radio Apolo">Radio Apolo</option>
		</select>

		<!--HOra y fecha-->
				
		<!--coincidan con la hora y fecha del dispositivo-->
		<input type="hidden" id="fecha" class="controls" name="fecha" required readonly  value="<?php echo date('Y-m-d'); ?>">
		<input type="hidden" id="hora" class="controls" name="hora" required readonly  value="<?php echo date('H:i'); ?>">
		<!--FIN-->

		<!--Boton de actualizar hora-->
		<!--FIN-->
		
		<!--Boton de enviar-->
		<input class="botons" type="submit" name="registrar" onclick="actualizarFechaHora()" class="btn-blue custom-btn" value="Enviar">
	</form>
	<!--FIN PLANILLA actividad-->
	



	<!--ultimos registros-->
	<?php
    include("../../../BBDD/conexion_BBDD.php");

    $usuarios = "SELECT * FROM planilla_actividad";

	?>
		<div class="container-table">
			<div class="table__title"> Datos Enviados</div>
			<div class="table__header">Unidad</div>
			<div class="table__header">Parada</div>
			<div class="table__header">Destino</div>
			<div class="table__header">Hora</div>

			<?php 
				$resultado = mysqli_query($mysqli, $usuarios); 
				
				while($row = mysqli_fetch_assoc($resultado)){
			?>

			<div class="table__item"><?php echo $row['unidad'];?></div>
			<div class="table__item"><?php echo $row['parada'];?></div>
			<div class="table__item"><?php echo $row['destino'];?></div>
			<div class="table__item"><?php echo $row['hora'];?></div>
			<?php };  
				mysqli_free_result($resultado);
			?>
		</div>
	
</div>
	<!--FIN DE ULTIMOS REGISTROS-->
	
    <!--JAVASCRIPT-->
    <script src="main.js"></script>
	<script src="script.js"></script>
	<!--fin-->
</body>
</html>
