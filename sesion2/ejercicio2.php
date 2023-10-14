<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="ejercicio2.css"/>
    </head>
    <body>
        <h1>Ejercicio 2 - Saber si un numero es par o impar</h1>
        <form action="ejercicio2.1.php" method="post">
            <fieldset>
                <legend>Numero par o inpar</legend>
                <table>
                    <tr>
                        <td><p>Introduce un numero: </p></td>
                        <td><input name='parametro' type="number" required></td>
                    </tr>
                </table>
            </fieldset>
            <input type="submit" value="Enviar" class="button" />
            <input type="reset" value="Borrar" class="button" />
        </form>
    </body>
</html>