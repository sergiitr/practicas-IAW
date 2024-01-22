<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="styles.css"/>
        <title>Practica 17</title>
    </head>
    <body>
        <h1>Practica 17 - Ejercicio 3</h1>
        <h2>Cifrado y descifrado</h2>
        <br>
        <form action="ejercicio3.1.php" method="post">
            <table class="col-2">
                <tr>
                    <th align="right">Codigo a cifrar: </th>
                    <td align="left">
                        <input type="text" name="cifrado"/>
                    </td>
                </tr>
                <tr>
                    <th align="right">Cifrar o descifrar: </th>
                    <td  align="left">
                        <select name="estado">
                            <OPTION value="cifrar">Cifrado</OPTION>
                            <OPTION value="descifrar">Descifrar</OPTION>
                        </select>
                    </td>
                </tr>
            </table>
            <br>
            <input type="submit" value="Enviar"/>
        </form>
    </body>
</html>