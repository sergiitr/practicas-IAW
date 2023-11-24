<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Practica 14</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
    </head>
    <body>
        <h1>Practica 14</h1>
        <h2>Ejercicio 1</h2>
        <hr>
        <?php
            if(isset($_SESSION['cantF5']))
                $_SESSION['cantF5'] += 1;
            else
                $_SESSION['cantF5'] = 0;
            echo "<p>Has actualizado esta página ".$_SESSION['cantF5']." veces.</p>";
        ?>
    </body>
</html>
