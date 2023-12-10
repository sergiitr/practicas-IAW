<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
    </head>
    <body>
        <h1 class="pt-1">Practica 16 - Imagen captcha</h1>
        <?php
            if ( $_POST["valor"] == $_SESSION['valoraleatorio'] ) 
                echo "<h2 class='pt-3'>Codigo correcto</h2>";
            else {
                echo "<h2 class='pt-3'>El codigo es incorrecto, vuelvelo a intentar</h2>";
                echo "<input type='button' onclick='history.back()' name='Volver atrás' value='Volver atrás' class='btn btn-primary'/>";
            }
        ?>
    </body>
</html>