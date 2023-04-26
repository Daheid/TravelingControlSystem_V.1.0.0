<?php

	require "conexion_BBDD.php";

	session_start();
	
	if($_POST){
		
		$id = $_POST['id'];
		$password = $_POST['password'];
		
		$sql = "SELECT id, password, tipo_usuario, nombre, apellido FROM usuarios WHERE id='$id' ";
		
		$resultado = $mysqli->query($sql);
		$num = $resultado->num_rows;
		
		
		if($num>0){
			$row = $resultado->fetch_assoc();
			$password_bd = $row['password'];
			
			$pass_c = sha1($password);
			
			if($password_bd == $pass_c){
				
				$_SESSION['id'] = $row['id'];
				$_SESSION['password'] = $row['password'];
				$_SESSION['tipo_usuario'] = $row['tipo_usuario'];
				$tipo_usuario_validar = $_SESSION['tipo_usuario'];

				$_SESSION['nombre'] = $row['nombre'];

				if($tipo_usuario_validar == 1){
					header("Location: ../administrador/menu/php/menu.php");
				}else{
					header("location: ../fiscal/planilla_actividad/php/planilla_actividad.php");
				};
				
			} else {
				echo '<script>
						alert("Contraseña Incorrecta");
						window.location = "../login/php/index.php";
					</script>;';
			}
			
			
			} else {
				echo '<script>
						alert("Usuario incorrecto");
						window.location = "../login/php/index.php";
					</script>;';
		}
		
		
		
	}
	
	
	
?>
