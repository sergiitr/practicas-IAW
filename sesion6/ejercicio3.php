<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 3</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
    </head>
    <body>
        <h1>Ejercicio 3 - Tabla de multiplicar</h1>
        <form action="ejercicio3.1.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Introduce sus datos</legend>
                <table align="center">
                    <tr>
                        <td id="noparam"><p>Introduzca su numero: </p></td>
                        <td id="param"><input name='numero' type="number" required></td>
                    </tr>
                </table>
            </fieldset>
            <input type="submit" value="Enviar" class="button"/>
            <input type="reset" value="Borrar" class="button"/>
        </form> 
    </body>
</html>