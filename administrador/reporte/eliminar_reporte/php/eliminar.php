<?php
    include("../../../../BBDD/conexion_BBDD.php");

    $id = $_GET['id'];


    $eliminar = "DELETE FROM reportes WHERE id = '$id' ";

    $ejecutar = mysqli_query($mysqli, $eliminar);

    if($ejecutar){
        echo '
            <script>
                alert("Reporte eliminado correctamente");
                window.location = "../../php/reporte.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Error de conexion, intente de nuevo");
                window.location = "../../php/reporte.php";
            </script>
        ';
    };

    mysqli_close($mysqli);

?>