<?php
    include("conexion_BBDD.php");

    $numero = $_POST['numero'];
    $placa = $_POST['placa'];
    $dueno = $_POST['dueno'];

    $actualizar = "UPDATE encavas SET numero='$numero',placa='$placa',dueno='$dueno' ";


    $ejecutar = mysqli_query($mysqli, $actualizar);

    if($ejecutar){
        echo '
            <script>
                alert("Datos de Encava actualizados");
                window.location = "../administrador/encavas/php/encavas.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Error de conexion, intente de nuevo");
                window.location = "../administrador/usuarios/php/usuarios.php";
            </script>
        ';
    };

    mysqli_close($mysqli);

?>