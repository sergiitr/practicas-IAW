<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="styles.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Practica 14</title>
    </head>
    <body>
        <h1>Practica 14</h1>
        <h2>Ejercicio 2</h2>
        <br><br>
        <form action="./ejercicio2.1.php"  method="post" enctype="multipart/form-data">
            <input name='numero' type="number" required>
            <br><br>
            <input type="submit" value="Enviar" class="button"/>
            <input type="reset" value="Borrar" class="button"/>
        </form>
    </body>
</html>