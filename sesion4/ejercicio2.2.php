<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="ejercicio2.css"/>
    </head>
    <body>
        <?php
            echo "<div id='general2'>";
            if ($_POST['usuario']=="root" && $_POST['contrasena']=="root")
                echo "<p>Usuario <b>",$_POST['usuario'],"</b> iniciado correctamente en el servidor <b>",$_POST['servidor'],"</b></p>";
            else
                header('Location: ./ejercicio2.php');
            echo "</div>";
        ?>
    </body>
</html>