<?php
    include("../../../../BBDD/conexion_BBDD.php");

    $id = $_GET['id'];


    $eliminar = "DELETE FROM usuarios WHERE id = '$id' ";

    $ejecutar = mysqli_query($mysqli, $eliminar);

    if($ejecutar){
        echo '
            <script>
                alert("Datos de usuario eliminados correctamente");
                window.location = "../../php/usuarios.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Error de conexion, intente de nuevo");
                window.location = "../../php/usuarios.php";
            </script>
        ';
    };

    mysqli_close($mysqli);

?>