<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="ejercicio1.css"/>
    </head>
    <body>
        <h1>Practica 3 - Pedido de cervezas</h1>
        <?php
            echo "<p id='pedido'>Aqui tienes tu pedido <b>",$_GET["nombre"], "</b></p>";
            echo "<hr>";
            if ($_GET["edad"] >= 18) {
                if ($_GET["cervezas"]=="aguilasin") {
                    if ($_GET["cantidad"] > 0)
                        for ($x=0; $x<$_GET["cantidad"]; $x++)
                            echo "<img src='./",$_GET["cervezas"],".jpg'></img>";
                    else
                        echo "<p>El pedido es de 0 o un numero negativo de cervezas</p>";
                } else {
                    if ($_GET["cantidad"] > 0)
                        for ($x=0; $x<$_GET["cantidad"]; $x++) 
                            echo "<img src='./",$_GET["cervezas"],".png'></img>"; 
                    else
                        echo "<p>El pedido es de 0 o un numero negativo de cervezas</p>";
                }
            } elseif ($_GET["edad"] > 0 && $_GET["edad"] < 18) 
                echo "<p>Eres menor de edad, no debes beber cevezas</p>";
            else {
                echo "<p>Edad negativa o 0, vuelve al formulario</p>";
                echo "<a href='./ejercicio1.php'><button>Regresar al formulario</button></a>";
            }
            echo "<p><b>El enlace de la pagina es el siguiente: </b>", $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"],"</p>";
        ?>
    </body>
</html>