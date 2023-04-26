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

    $encavas = "SELECT * FROM encavas";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <script src="../eliminar_usuario/php/confirmacion.js"></script>
    <title>Encavas</title>
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
				<li><a href="../../usuarios/php/usuarios.php">usuarios</a></li>
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
        <div class="table__title">Datos de Encavas</div>
        <div class="table__header">Numero de encava</div>
        <div class="table__header">Placa de encava</div>
        <div class="table__header">Dueño de la encava</div>

        <div class="table__header">Edicion</div>
        
        <?php 
            $resultado = mysqli_query($mysqli, $encavas); 
            
            while($row = mysqli_fetch_assoc($resultado)){
        ?>

        <div class="table__item"><?php echo $row['numero'];?></div>
        <div class="table__item"><?php echo $row['placa'];?></div>
        <div class="table__item"><?php echo $row['dueno'];?></div>

        <div class="table__item">
            <a href="../editar_encava/php/editar.php?numero=<?php echo $row['numero'];?>" class="table__item__link">Editar| </a> 
            <a href="../eliminar_encava/php/eliminar.php?numero=<?php echo $row['numero'];?>" class="table__item__link"> Eliminar</a>
            

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