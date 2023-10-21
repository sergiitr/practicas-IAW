<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 1</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
    </head>
    <body>
        <form action="ejercicio1.1.php" method="post" enctype="multipart/form-data">
            <h1>Ejercicio 1 - Ordenar numeros de mayor a menor</h1>
            <fieldset>
                <legend>Introduce sus datos</legend>
                <table align="center">
                    <tr>
                        <td id="noparam"><p>Numero 1: </p></td>
                        <td id="param"><input name='num1' type="number" required></td>
                    </tr>
                    <tr>
                        <td id="noparam"><p>Numero 2: </p></td>
                        <td id="param"><input name='num2' type="number" required></td>
                    </tr>
                    <tr>
                        <td id="noparam"><p>Numero 3: </p></td>
                        <td id="param"><input name='num3' type="number" required></td>
                    </tr>
                </table>
            </fieldset>
            <input type="submit" value="Enviar" class="button"/>
            <input type="reset" value="Borrar" class="button"/>
        </form> 
    </body>
</html>