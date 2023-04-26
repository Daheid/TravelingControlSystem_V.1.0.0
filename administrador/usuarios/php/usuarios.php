<?php
    include("../../../BBDD/conexion_BBDD.php");

    //Verificacion de sesion en cuenta
    session_start();

    $usuarios = "SELECT * FROM usuarios";

    if(isset($_SESSION['nombre'])){
        echo ' ';
    }

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


    $usuarios = "SELECT * FROM usuarios";

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/png" href="../../../logo/logo-sin-fondo.ico"/>
    <script src="../eliminar_usuario/php/confirmacion.js"></script>
    <title>Usuarios</title>
</head>
<body>

    <!--Menu-->
    <header> 
        <nav>
            <a href="#"><img class="logo" src="../../../logo/logo-sin-fondo.jpeg" alt="logo"></a>

            <ul class="enlaces-menu">
                <li><a href="../../registro/php/registro.php">Registro de usuarios</a></li>
                <li><a href="../../registro_encavas/php/registro_encava.php">Registro de encava</a></li>
                <li><a href="../../reporte/php/reporte.php">Reportes</a></li>
				<li><a href="../../planilla_actividad/php/planilla_actividad.php">Planilla de actividad</a></li>
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



    <div class="container-table">
        <div class="table__title"> Datos de usuario</div>
        <div class="table__header">id</div>
        <div class="table__header">cedula</div>
        <div class="table__header">telefono</div>
        <div class="table__header">email</div>
        <div class="table__header">nombre</div>
        <div class="table__header">apellido</div>
        <div class="table__header">Edicion</div>
        
        <?php 
            $resultado = mysqli_query($mysqli, $usuarios); 
            
            while($row = mysqli_fetch_assoc($resultado)){
        ?>

        <div class="table__item"><?php echo $row['id'];?></div>
        <div class="table__item"><?php echo $row['cedula'];?></div>
        <div class="table__item"><?php echo $row['telefono'];?></div>
        <div class="table__item"><?php echo $row['email'];?></div>
        <div class="table__item"><?php echo $row['nombre'];?></div>
        <div class="table__item"><?php echo $row['apellido'];?></div>
        <div class="table__item">
            <a href="../editar_usuario/php/editar.php?id=<?php echo $row['id'];?>" class="table__item__link">Editar| </a> 
            <a href="../eliminar_usuario/php/eliminar.php?id=<?php echo $row['id'];?>" class="table__item__link"> Eliminar</a>
            

        </div>
        
        
        <?php };  
            mysqli_free_result($resultado);
        ?>
        
    </div>

    <!--JAVASCRIPT-->
    <script src="main.js"></script>
	<!--fin-->
</body>
</html>