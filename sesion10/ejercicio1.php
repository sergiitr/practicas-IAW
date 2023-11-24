<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Practica 10</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
    </head>
    <body>
        <h1>Practica 10</h1>
        <h2>Añadir proveedores</h2>
        <hr>
        <form action="ejercicio1.1.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Añada un proveedor</legend>
                <table align="center">
                    <tr>
                        <td id="noparam"><p>Codigo: </p></td>
                        <td id="param"><input name='codigo' size=3 type="text" required></td>
                    </tr>
                    <tr>
                        <td id="noparam"><p>Descripcion: </p></td>
                        <td id="param"><input name='descripcion' type="text" required></td>
                    </tr>
                    <tr>
                        <td id="noparam"><p>Tfno: </p></td>
                        <td id="param"><input name='tfno' type="number" required></td>
                    </tr>
                    <tr>
                        <td id="noparam"><p>Web: </p></td>
                        <td id="param"><input name='web' type="text" required></td>
                    </tr>
                </table>
            </fieldset>
            <input type="submit" value="Enviar" class="button"/>
            <input type="reset" value="Borrar" class="button"/>
        </form> 
    </body>
</html>