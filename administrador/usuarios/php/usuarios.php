<?php
    include("../../../BBDD/conexion_BBDD.php");

    $usuarios = "SELECT * FROM usuarios";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <script src="../eliminar_usuario/php/confirmacion.js"></script>
    <title>Usuarios</title>
</head>
<body>
    
    <div class="container-table">
        <div class="table__title"> Datos de usuario</div>
        <div class="table__header">id</div>
        <div class="table__header">cedula</div>
        <div class="table__header">telefono</div>
        <div class="table__header">parada</div>
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
        <div class="table__item"><?php echo $row['parada'];?></div>
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
    
</body>
</html>