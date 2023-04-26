<?php
    include("../../../../BBDD/conexion_BBDD.php");

    $id = $_GET['id'];
    $usuarios = "SELECT * FROM usuarios where id='$id'";

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
    <title>Editar usuario</title>
</head>
<body>
    
    <form class="container-table" action="../../../../BBDD/editar_usuario.php" method="post"> 
        <div class="table__title"> Datos de usuario</div>
        <div class="table__header">id</div>
        <div class="table__header">cedula</div>
        <div class="table__header">telefono</div>
        <div class="table__header">parada</div>
        <div class="table__header">email</div>
        <div class="table__header">nombre</div>
        <div class="table__header">apellido</div>
        <div class="table__header">Accion</div>
        
        <?php 
            $resultado = mysqli_query($mysqli, $usuarios); 
            
            while($row = mysqli_fetch_assoc($resultado)){
        ?>

        <input type="text" name="id" value="<?php echo $row['id'];?>" class="table__item"></input>
        <input type="text" name="cedula" value="<?php echo $row['cedula'];?>" class="table__item"></input>
        <input type="text" name="telefono" value="<?php echo $row['telefono'];?>" class="table__item"></input>
        <input type="text" name="parada" value="<?php echo $row['parada'];?>" class="table__item"></input>
        <input type="text" name="email" value="<?php echo $row['email'];?>" class="table__item"></input>
        <input type="text" name="nombre" value="<?php echo $row['nombre'];?>" class="table__item"></input>
        <input type="text" name="apellido" value="<?php echo $row['apellido'];?>" class="table__item"></input>

        <input type="hidden" name="tipo_usuario" value="<?php echo $row['apellido'];?>" class="table__item"></input>

        <input type="hidden" name="password" value="<?php echo $row['apellido'];?>" class="table__item"></input>

            
        <?php };  
            mysqli_free_result($resultado);
        ?>

        <input type="submit" value="actualizar" class="container__submit">
    </form>
</body>
</html>