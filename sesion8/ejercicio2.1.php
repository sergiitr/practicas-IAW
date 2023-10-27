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
        <?php include "misfunciones.php";
            $base = $_POST['base'];
            $exponente = $_POST['exponente'];
            echo "<h3>El resultado de ", $base ,"<sup>", $exponente,"</sup> da: ",exponente($base,$exponente),"</h3>";
        ?>
        <h4>Para descargar el codigo generado pulse <a href="./ejercicio2.1.txt">aqui</a></h4>
        <h4>Para ver el archivo de functiones pulse <a href="./misfunciones.txt">aqui</a></h4>
    </body>
</html>