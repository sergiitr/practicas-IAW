<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 2</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
    </head>
    <body>
        <h1>Ejercicio 2 - Numeros comprendidos</h1>
        <form action="ejercicio3.1.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Introduce sus datos</legend>
                <table align="center" class="table table-dark table-striped-columns">
                    <tr>
                        <td id="noparam"><p>Introduzca el primer numero: </p></td>
                        <td id="param"><input name='n1' type="number" required></td>
                    </tr>
                    <tr>
                        <td id="noparam"><p>Introduzca el segundo numero: </p></td>
                        <td id="param"><input name='n2' type="number" required></td>
                    </tr>
                </table>
            </fieldset>
            <input type="submit" value="Enviar" class="button"/>
            <input type="reset" value="Borrar" class="button"/>
        </form> 
    </body>
</html>