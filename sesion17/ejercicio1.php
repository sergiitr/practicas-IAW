<?php session_start();
    $_SESSION["aleatorio"]=rand(1,25);
    echo $_SESSION["aleatorio"];
    $_SESSION["intentos"]=1;
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Practica 17</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
    </head>
    <body>
    <h1>Practica 17 - Ejercicio 1</h1>
        <form action="./ejercicio1.1.php" method="post">
            <h2>Adivina el numero, del 1 al 25</h2>
            <input type="number" name="numero" required>
            <input class="botones1" type="submit" value="adivinar">
        </form>
    </body>
</html>