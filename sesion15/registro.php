<?php
    $db_hostname = "localhost";
    $db_database = "encriptado";
    $db_username = "root";
    $db_password = "";
    $conexion = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
    if ($conexion->connect_error)
        die("Conexión fallida: " . $conexion->connect_error);
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST["usuarios"];
        $contrasena = $_POST["contrasenas"];    
        $contrasena_cifrada = password_hash($contrasena, PASSWORD_DEFAULT);    
        $sql = "INSERT INTO usuarios (usuario, clave) VALUES ('$usuario', '$contrasena_cifrada')";
    
        if ($conexion->query($sql) === TRUE) {
            echo "Usuario registrado correctamente";
            header("Location: ejercicio1.1.php");
        } else
            echo "Error al registrar el usuario: " . $conexion->error;
    }
    $conexion->close();
?>
