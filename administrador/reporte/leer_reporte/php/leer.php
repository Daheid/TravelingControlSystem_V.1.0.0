<?php
    include("../../../../BBDD/conexion_BBDD.php");

    $id = $_GET['id'];
    $usuarios = "SELECT * FROM reportes where id='$id'";

    //Verificacion de sesion en cuenta
    session_start();

    include("../../../../BBDD/conexion_BBDD.php");

    $usuarios = "SELECT * FROM usuarios";

    if(isset($_SESSION['nombre'])){
        echo ' ';
    }

    if(!isset($_SESSION['id'])){

        echo '
            <script>
            alert("inicie sesion");
            window.location = "../../../../login/php/index.php";
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
    <link rel="shortcut icon" type="image/png" href="../../../../logo/logo-sin-fondo.ico"/>
    <link rel="stylesheet" href="style.css">
    <title>Reporte</title>
</head>
<body>
    
    <form class="container-table" action="../../php/reporte.php" method="post"> 
        <div class="table__title">Reporte</div>
        <div class="table__header">Contenido: </div>
        <div class="table__header">Accion</div>
        
        <?php 
            $resultado = mysqli_query($mysqli, $usuarios); 
            
            while($row = mysqli_fetch_assoc($resultado)){
        ?>

        <input type="text" readonly name="id" value="<?php echo $row['reporte'];?>" class="table__item"></input>

            
        <?php };  
            mysqli_free_result($resultado);
        ?>

        <input type="submit" value="Volver" class="container__submit">
    </form>
</body>
</html>