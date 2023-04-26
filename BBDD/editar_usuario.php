<?php
    include("conexion_BBDD.php");

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $telefono= $_POST['telefono'];
    $email = $_POST['email'];
    $id = $_POST['id'];
    $password = $_POST['password'];

    $tipo_usuario=$_POST['tipo_usuario'];

    $actualizar = "UPDATE usuarios SET id='$id',password='$password_db',tipo_usuario='$tipo_usuario',cedula='$cedula',telefono='$telefono',email='$email',nombre='$nombre', apellido='$apellido' WHERE id='$id' ";


    $ejecutar = mysqli_query($mysqli, $actualizar);

    if($ejecutar){
        echo '
            <script>
                alert("Datos de usuario actualizados");
                window.location = "../administrador/usuarios/php/usuarios.php";
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