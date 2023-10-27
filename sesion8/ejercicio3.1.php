<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 3</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
    </head>
    <body>
        <h1> Ejercicio 3 - Numeros comprendidos</h1>
        <?php include "misfunciones.php";
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            echo "<h3>El resultado de la suma de los numeros comprendidos entre ",$n1," y ", $n2, " da: ", sumaComprendidos($_POST['n1'],$_POST['n2']),"</h3>";
        ?>
        <h4>Para descargar el codigo generado pulse <a href="./ejercicio3.1.txt">aqui</a></h4>
        <h4>Para ver el archivo de functiones pulse <a href="./misfunciones.txt">aqui</a></h4>
    </body>
</html>