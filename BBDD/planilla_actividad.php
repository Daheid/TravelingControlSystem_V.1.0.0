<?php
    include 'conexion_BBDD.php';

    $unidad = $_POST['unidad'];
    $destino = $_POST['destino'];
    $parada = $_POST['parada'];
    $fecha= $_POST['fecha'];
    $hora = $_POST['hora'];

    $query = "INSERT INTO planilla_actividad(unidad, destino, parada, fecha, hora) VALUES ('$unidad','$destino','$parada','$fecha','$hora')";

    $ejecutar = mysqli_query($mysqli, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Datos enviados correctamente");
                window.location = "../fiscal/planilla_actividad/php/planilla_actividad.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Error de conexion, intente de nuevo");
                window.location = "../planilla_actividad/php/planilla_actividad.php";
            </script>
        ';
    }

    mysqli_close($mysqli);


?>