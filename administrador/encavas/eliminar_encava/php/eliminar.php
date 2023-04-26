<?php
    include("../../../../BBDD/conexion_BBDD.php");

    $numero = $_GET['numero'];


    $eliminar = "DELETE FROM encavas WHERE numero = '$numero' ";

    $ejecutar = mysqli_query($mysqli, $eliminar);

    if($ejecutar){
        echo '
            <script>
                alert("Datos de encava eliminados correctamente");
                window.location = "../../php/encavas.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Error de conexion, intente de nuevo");
                window.location = "../../php/encavas.php";
            </script>
        ';
    };

    mysqli_close($mysqli);

?>