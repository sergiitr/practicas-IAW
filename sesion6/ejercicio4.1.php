<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="styles.css"/>
        <title>Ejercicio 4</title>
    </head>
    <body>
        <h1>Ejercicio 4 - Tabla de multiplicar (exluyendo al 5)</h1>
        <?php
            echo "<h3>La tabla de multiplicar del numero ", $_POST['numero'].' ' ," es: </h3>";
            for ($variable=1; $variable<=10; $variable++) {
                if ( $variable==5 )
                    continue;
                $aux =  $_POST['numero'] * $variable;
                echo "<p>", $_POST['numero'].' ', "* ",$variable, " = ", $aux ,"</p>";
            }
        ?>
    </body>
</html>