<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="styles.css"/>
        <title>Document</title>
    </head>
    <body>
        <?php
            session_start();
            if (!isset($_SESSION["usuario"])) {
                header("Location: ejercicio1.php");
                exit();
            }
            $usuario = $_SESSION["usuario"];
            $contrasena = $_SESSION["contrasena"];
            echo "<h2>Has iniciado correctamente, $usuario</h2>";
            echo "<h3>La contraseña es <b>",$contrasena,"</b> </h3>";
            echo "<h3>La contraseña cifrada es <b>", $_SESSION["cifrada"], "</b></h3>";
            session_destroy();
        ?>
    </body>
</html>
