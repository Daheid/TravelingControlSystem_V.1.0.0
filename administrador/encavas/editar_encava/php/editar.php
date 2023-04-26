<?php
    include("../../../../BBDD/conexion_BBDD.php");

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


    $numero = $_GET['numero'];
    $encavas = "SELECT * FROM encavas where numero='$numero'";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <title>Editar Encava</title>
</head>
<body>
    
    <form class="container-table" action="../../../../BBDD/editar_encava.php" method="post"> 
        <div class="table__title"> Datos de usuario</div>
        <div class="table__header">Numero</div>
        <div class="table__header">Placa</div>
        <div class="table__header">Dueño</div>
        <div class="table__header">Accion</div>
        
        <?php 
            $resultado = mysqli_query($mysqli, $encavas); 
            
            while($row = mysqli_fetch_assoc($resultado)){
        ?>

        <input type="text" name="numero" value="<?php echo $row['numero'];?>" class="table__item"></input>
        <input type="text" name="placa" value="<?php echo $row['placa'];?>" class="table__item"></input>
        <input type="text" name="dueno" value="<?php echo $row['dueno'];?>" class="table__item"></input>
            
        <?php };  
            mysqli_free_result($resultado);
        ?>

        <input type="submit" value="actualizar" class="container__submit">
    </form>
</body>
</html>