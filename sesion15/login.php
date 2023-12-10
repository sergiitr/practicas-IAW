<?php
    session_start();

    $db_hostname = "localhost";
    $db_database = "encriptado";
    $db_username = "root";
    $db_password = "";

    $conexion = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

    if ($conexion->connect_error)
        die("Conexión fallida: " . $conexion->connect_error);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];
        $sql = "SELECT * FROM usuarios WHERE usuario='$usuario'";
        $result = $conexion->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($contrasena, $row["clave"])) {
                $_SESSION["usuario"] = $usuario;
                $_SESSION["contrasena"] = $contrasena;
                $_SESSION["cifrada"] = $row["clave"];
                header("Location: comprobacion.php");
            } else
                header("Location: ejercicio1.1.php");
        } else
            header("Location: ejercicio1.1.php");
    }

    $conexion->close();
?>