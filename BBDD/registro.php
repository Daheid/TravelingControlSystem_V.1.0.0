<?php

    include 'conexion_BBDD.php';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $telefono= $_POST['telefono'];
    $parada = $_POST['parada'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    $tipo_usuario = $_POST['tipo_usuario'];
    $password_db = sha1($password);

    $query = "INSERT INTO usuarios(id, password, tipo_usuario, cedula, telefono, parada, email, nombre, apellido) VALUES ('$id','$password_db','$tipo_usuario','$cedula','$telefono','$parada','$email','$nombre','$apellido')";

    $ejecutar = mysqli_query($mysqli, $query);

    if($ejecutar){
        echo '
            <script>
                alert("usuario registrado correctamente");
                window.location = "../administrador/registro/php/registro.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Error de conexion, intente de nuevo");
                window.location = "../registro/php/registro_fiscales.php";
            </script>
        ';
    }

    mysqli_close($mysqli);

?>