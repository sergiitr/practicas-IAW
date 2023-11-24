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
        <?php
            if (!isset($_SESSION['numeroIni'])) 
                $_SESSION['numeroIni'] = $_POST['numero'];
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') 
                if (isset($_POST['numero'])) 
                    $_SESSION['numeroIni'] = (int)$_POST['numero'];

            if (isset($_POST['increment'])) 
                $_SESSION['numeroIni']++;
            elseif (isset($_POST['decrement'])) 
                $_SESSION['numeroIni']--;
            
            echo $_SESSION['numeroIni'];
        ?>
        <form method="post">
            <div id="botones">
                <button type="submit" name="decrement" class="button"> - </button>
                <button type="submit" name="increment" class="button">+</button>
            </div>
        </form>
    </body>
</html>