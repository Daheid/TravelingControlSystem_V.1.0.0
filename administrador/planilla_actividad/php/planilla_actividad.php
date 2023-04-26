<?php
    include("../../../BBDD/conexion_BBDD.php");

    $usuarios = "SELECT * FROM planilla_actividad";


    //Verificacion de sesion en cuenta
    session_start();

    include("../../../BBDD/conexion_BBDD.php");

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/png" href="../../../logo/logo-sin-fondo.ico"/>
    <script src="../eliminar_usuario/php/confirmacion.js"></script>
    <title>planilla de actividad</title>
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
                <li><a href="../../usuarios/php/usuarios.php">usuarios</a></li>
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
        <div class="table__title"> Reportes de fiscales</div>
        <div class="table__header">unidad</div>
        <div class="table__header">Parada</div>
        <div class="table__header">Destino</div>
        <div class="table__header">Hora</div>
        <div class="table__header">Accion</div>

        
        <?php 
            $resultado = mysqli_query($mysqli, $usuarios); 
            
            while($row = mysqli_fetch_assoc($resultado)){
        ?>

        <div class="table__item"><?php echo $row['unidad'];?></div>
        <div class="table__item"><?php echo $row['parada'];?></div>
        <div class="table__item"><?php echo $row['destino'];?></div>
        <div class="table__item"><?php echo $row['hora'];?></div>



        <div class="table__item">

            <a href="../eliminar_planilla/php/eliminar.php?unidad=<?php echo $row['unidad'];?>" class="table__item__link"> Eliminar</a>
            

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