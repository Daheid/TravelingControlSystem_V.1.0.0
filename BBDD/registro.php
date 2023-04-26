<?php

    include 'conexion_BBDD.php';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $telefono= $_POST['telefono'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    $tipo_usuario = $_POST['tipo_usuario'];
    
    $password_db = sha1($password);

    $query = "INSERT INTO usuarios(id, password, tipo_usuario, cedula, telefono, email, nombre, apellido) VALUES ('$id','$password_db','$tipo_usuario','$cedula','$telefono','$email','$nombre','$apellido')";

    

    //Verificacion de cedula

    $cedulaV = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE cedula='$cedula'");
    $correoV = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE email='$email'");
    $idV = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE id='$id'");

    if(mysqli_num_rows($cedulaV) > 0){
        echo '
            <script>
                alert("Esta cedula ya le pertenece a un usuario diferente.");
                window.location = "../administrador/registro/php/registro.php";
            </script>
        ';
    }

    if(mysqli_num_rows($correoV) > 0){
        echo '
            <script>
                alert("Esta correo ya le pertenece a un usuario diferente.");
                window.location = "../administrador/registro/php/registro.php";
            </script>
        ';
    }

    if(mysqli_num_rows($idV) > 0){
        echo '
            <script>
                alert("Este ID ya le pertenece a un usuario diferente.");
                window.location = "../administrador/registro/php/registro.php";
            </script>
        ';
    }

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