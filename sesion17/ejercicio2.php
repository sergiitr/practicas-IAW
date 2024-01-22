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
        <h1>Practica 17 - Ejercicio 2</h1>
        <h2>Ordenar array de numeros</h2>
        <br>
        <?php
            for ($i=0; $i<50; $i++)
                $mi_array[$i] = rand(100,500);
            $media = array_sum($mi_array) / 50;
            echo "<p class='mt-2'>La media del array es ",$media,"</p>";
            sort($mi_array);
            echo "<p>Mi array ordenado de menor a mayor es:</p>";
            var_dump($mi_array);
            rsort($mi_array);
            echo "<p>Mi array ordenado de mayor a menor es:</p>";
            var_dump($mi_array);
        ?>
    </body>
</html>