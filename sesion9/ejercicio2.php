<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Practica 9 - Ejercicio 2</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
    </head>
    <body>
        <h1>Practica 9 - Ejercicio 2</h1>
        <h2>Consulta de Artículos</h2>
        <hr>
        <form action="ejercicio2.1.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Escoja su proveedor</legend>
                <table align="center">
                    <tr>
                        <td id="noparam"><p>Marca Articulo: </p></td>
                        <td id="param">
                            <select name="marca">
                                <option value="" selected>Seleccione valor</option>
                                <option value="ADI">Adidas</option>
                                <option value="NIK">Nike</option>
                                <option value="REE">Reebok</option>
                                <option value="MIZ">Mizuno</option>
                                <option value="FIL">Fila</option>
                                <option value="CON">Converse</option>
                                <option value="NBA">New Balance</option>
                                <option value="ASI">Asics</option>
                                <option value="PUM">Puma</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </fieldset>
            <input type="submit" value="Enviar" class="button"/>
            <input type="reset" value="Borrar" class="button"/>
        </form> 
    </body>
</html>