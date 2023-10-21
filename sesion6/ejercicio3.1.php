<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 3</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
    </head>
    <body>
        <h1>Ejercicio 3 - Tabla de multiplicar</h1>
        <?php
            echo "<h3>La tabla de multiplicar del numero ", $_POST['numero'].' ' ," es: </h3>";
            for ($variable=1; $variable<=10; $variable++) {
                $aux =  $_POST['numero'] * $variable;
                echo "<p>", $_POST['numero'].' ', "* ",$variable, " = ", $aux ,"</p>";
            }
        ?>
    </body>
</html>