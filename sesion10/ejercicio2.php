<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Practica 10 - Ejercicio 2</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
    </head>
    <body>
        <h1>Practica 10 - Ejercicio 2</h1>
        <h2>Consulta de Artículos</h2>
        <hr>
        <form action="ejercicio2.1.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Insertar articulo</legend>
                <table align="center">
                    <tr>
                        <td id="noparam"><p>Codigo: </p></td>
                        <td id="param"><input name='codigo' size=4 type="text" required></td>
                    </tr>
                    <tr>
                        <td id="noparam"><p>Descripcion: </p></td>
                        <td id="param"><input name='descripcion' type="text" required></td>
                    </tr>
                    <tr>
                        <td id="noparam"><p>PrecioCompra: </p></td>
                        <td id="param"><input name='PrecioCompra' type="number" required></td>
                    </tr>
                    <tr>
                        <td id="noparam"><p>PVP: </p></td>
                        <td id="param"><input name='pvp' type="number" required></td>
                    </tr>
                    <tr>
                        <td id="noparam"><p>FechaCompra: </p></td>
                        <td id="param"><input name='f_compra' type="date" required></td>
                    </tr>
                    <tr>
                        <td id="noparam"><p>Stock: </p></td>
                        <td id="param"><input name='stock' type="number" required></td>
                    </tr>
                    <tr>
                        <td id="noparam"><p>Marca Articulo: </p></td>
                        <td id="param">
                            <select name="marca">
                            <?php
                                $db_hostname = "localhost";
                                $db_database = "deportes";
                                $db_username = "root";
                                $db_password = "";
                                $conexion = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
                                $resultado = mysqli_query($conexion, "select * from proveedores");
                                while ($valores = mysqli_fetch_assoc($resultado)) {
                                    echo '<option value="',$valores['codigo'],'">',$valores['descripcion'],'</option>';
                                }
                            ?>
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