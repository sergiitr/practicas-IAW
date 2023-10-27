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
        <?php include "misfunciones.php";
            $n1 = $_POST['num1'];
            $n2 = $_POST['num2'];
            $n3 = $_POST['num3'];
            echo "<h3>",ordenar($n1,$n1,$n3), "</h3>";
        ?>
        <h4>Para descargar el codigo generado pulse <a href="./ejercicio1.1.txt">aqui</a></h4>
        <h4>Para ver el archivo de functiones pulse <a href="./misfunciones.txt">aqui</a></h4>
    </body>
</html>