<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="ejercicio2.css"/>
    </head>
    <body>
        <h1>Ejercicio 2 - Saber si un numero es par o impar</h1>
        <?php
            if ($_POST['parametro'] % 2 == 0)
                echo "El numero ",$_POST['parametro'], " es <b>par</b>";
            else
                echo "El numero ",$_POST['parametro'], " es <b>impar</b>";
        ?>
    </body>
</html>