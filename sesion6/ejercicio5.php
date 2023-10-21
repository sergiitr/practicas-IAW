<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 5</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="styles.css"/>
    </head>
    <body>
        <h1>Ejercicio 5 - Tabla de asignaturas</h1>
        <?php
            $array = array(
                "EIE", "IAW",
                "Base de Datos",
                "Redes", "Seguridad",
                "Libre Configuracion",
                "Ingles"
            );
        ?>
        <table border="1" class="table table-dark table-striped-columns">
            <tr class="titulo">
                <th colspan="2"><p><b>2º ASIR</b></p></th>
            </tr>
            <tr>
                <td class="orden"><p><b>Orden</b></p></td>
                <td class="asignatura"><p><b>Asignatura</b></p></td>
            </tr>
            <?php
                $count = count($array);
                for ($i=0; $i<$count; $i++) {
                    echo "
                        <tr>
                            <td><p>",$i+1,"</p></td>
                            <td><p>",$array[$i],"</p></td>
                        </tr>
                    ";
                }
            ?>
        </table>
    </body>
</html>

