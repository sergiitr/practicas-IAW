<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="ejercicio1.css"/>
    </head>
    <body>
        <h1>Ejercicio 1 - Nombre y edad a traves de formulario</h1>
        <form action="ejercicio1.1.php" method="post">
            <fieldset>
                <legend>Informacion Personal</legend>
                <table>
                    <tr>
                        <td><p>Nombre:</p></td>
                        <td><input name='nombre' type="text" required></td>
                    </tr>
                    <tr>
                        <td><p>Apellidos:</p></td>
                        <td><input name='apellidos' type="text" required></td>
                    </tr>
                    <tr>
                        <td><p>Edad:</p></td>
                        <td><input name='edad' type="number" required></td>
                    </tr>
                </table>
            </fieldset>
            <input type="submit" value="Enviar" class="button"/>
            <input type="reset" value="Borrar" class="button"/>
        </form>
    </body>
</html>