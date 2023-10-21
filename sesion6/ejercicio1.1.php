<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 1</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
    </head>
    <body>
        <h1>Ejercicio 1 - Ordenar numeros de mayor a menor</h1>
        <h3>El orden de los numeros introducidos de mayor a menor es: </h3>
        <?php
            if ( $_POST['num1'].' '>$_POST['num2'].' ' && $_POST['num2'].' '>$_POST['num3'].' '  )
                echo "<p>",$_POST['num1'].' ', " - ", $_POST['num2'].' ', " - ", $_POST['num3'].' ', "</p>";
            elseif ( $_POST['num1'].' '>$_POST['num3'].' ' && $_POST['num3'].' '>$_POST['num2'].' ' )
                echo "<p>",$_POST['num1'].' ', " - ", $_POST['num3'].' ', " - ", $_POST['num2'].' ', "</p>";
            elseif ( $_POST['num2'].' '>$_POST['num1'].' ' && $_POST['num1'].' '>$_POST['num3'].' ' )
                echo "<p>",$_POST['num2'].' ', " - ", $_POST['num1'].' ', " - ", $_POST['num3'].' ', "</p>";
            elseif ( $_POST['num2'].' '>$_POST['num3'].' ' && $_POST['num3'].' '>$_POST['num1'].' ' )
                echo "<p>",$_POST['num2'].' ', " - ", $_POST['num3'].' ', " - ", $_POST['num1'].' ', "</p>";
            elseif ( $_POST['num3'].' '>$_POST['num1'].' ' && $_POST['num1'].' '>$_POST['num2'].' ' )
                echo "<p>",$_POST['num3'].' ', " - ", $_POST['num1'].' ', " - ", $_POST['num2'].' ', "</p>";
            else
                echo "<p>",$_POST['num3'].' ', " - ", $_POST['num2'].' ', " - ", $_POST['num1'].' ', "</p>";
        ?>
    </body>
</html>