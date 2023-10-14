<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="ejercicio1.css"/>
    </head>
    <body>
        <h1>Ejercicio 1 - Nombre y edad a traves de formulario</h1>
        <?php
            echo "Tu nombre es <b>", $_POST['nombre'].' ', $_POST['apellidos'].' ', "</b> y tu edad es de <b>", $_POST['edad'].' ',"</b>";
        ?>
    </body>
</html>