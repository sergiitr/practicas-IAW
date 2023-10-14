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
        <h1>Pedido del Alumno</h1>
        <form action="ejercicio1.2.php" method="get">
            <fieldset>
                <legend>Introduce sus datos</legend>
                <table align="center">
                    <tr>
                        <td id="noparam"><p>Nombre: </p></td>
                        <td id="param"><input name='nombre' type="text" required></td>
                    </tr>
                    <tr>
                        <td id="noparam"><p>Edad: </p></td>
                        <td id="param"><input name='edad' type="number" required></td>
                    </tr>
                    <tr>
                        <td id="noparam"><p>Cantidad: </p></td>
                        <td id="param"><input name='cantidad' type="number" required></td>
                    </tr>
                    <tr>
                        <td id="noparam"><p>Cervezas: </p></td>
                        <td id="param">
                            <select name="cervezas">
                                <option value="aguilasin">Aguila</option>
                                <option value="alhambra">Alhambra</option>
                                <option value="estrella">Estrella</option>
                                <option value="mahou">Mahou</option>
                                <option value="sanmiguel">San Miguel</option>
                                <option value="volldamm">Voll Damm</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <input type="submit" value="Enviar" class="button"/>
                <input type="reset" value="Borrar" class="button"/>
            </fieldset>
        </form>
    </body>
</html>