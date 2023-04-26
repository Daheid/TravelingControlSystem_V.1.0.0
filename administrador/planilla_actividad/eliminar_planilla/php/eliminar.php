<?php
    include("../../../../BBDD/conexion_BBDD.php");

    $unidad = $_GET['unidad'];


    $eliminar = "DELETE FROM planilla_actividad WHERE unidad = '$unidad' ";

    $ejecutar = mysqli_query($mysqli, $eliminar);

    if($ejecutar){
        echo '
            <script>
                alert("Planilla eliminada correctamente");
                window.location = "../../php/planilla_actividad.php";
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