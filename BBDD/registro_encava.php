<?php

    include 'conexion_BBDD.php';

    $numero = $_POST['numero'];
    $placa = $_POST['placa'];
    $dueno = $_POST['dueno'];

    $query = "INSERT INTO encavas(numero, placa, dueno) VALUES ('$numero','$placa','$dueno')";

    //Verificacion de cedula

    $numeroV = mysqli_query($mysqli, "SELECT * FROM encavas WHERE numero='$numero'");

    if(mysqli_num_rows($numeroV) > 0){
        echo '
            <script>
                alert("Este numero ya le pertenece a otra encava.");
                window.location = "../administrador/registro_encavas/php/registro_encava.php";
            </script>
        ';
    }

    $ejecutar = mysqli_query($mysqli, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Encava registrada correctamente");
                window.location = "../administrador/registro_encavas/php/registro_encava.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Error de conexion, intente de nuevo");
                window.location = "../administrador/registro_encavas/php/registro_encava.php";
            </script>
        ';
    }

    mysqli_close($mysqli);

?>