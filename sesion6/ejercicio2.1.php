<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 2</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
    </head>
    <body>
        <h1> Ejercicio 2 - Potencias</h1>
        <?php
            echo "<h3>El resultado de ", $_POST['base'],"<sup>", $_POST['exponente'],"</sup> da: </h3>";
            $variable=0;
            $aux=1;
            if ( $_POST['exponente'] > 0 ) {
                do {
                    $aux = $aux * $_POST['base'];
                    $variable = $variable + 1;
                } while ($variable<$_POST['exponente']);
                echo "<p>", $aux, "</p>";
            } elseif ( $_POST['exponente'] == 0 )
                echo "<p>El resultado es 1</p>";
            else {
                do {
                    $aux = $aux * (1/$_POST['base']);
                    $variable = $variable + 1;
                } while ($variable<abs($_POST['exponente']));
                echo "<p>", $aux, "</p>";
            } 
        ?>
    </body>
</html>