<?php
    include 'conexion_BBDD.php';
    
    $nombres = $_POST['nombres'];
    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];
    $reporte = $_POST['reporte'];

    $query = "INSERT INTO reportes(nombre, correo, asunto, reporte) VALUES ('$nombres','$correo','$asunto','$reporte')";

    $ejecutar = mysqli_query($mysqli, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Reporte enviado");
                window.location = "../fiscal/reporte/php/reporte.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Error de conexion, intente de nuevo");
                window.location = "../fiscal/reporte/php/reporte.phpp";
            </script>
        ';
    };

    mysqli_close($conexion);


?>