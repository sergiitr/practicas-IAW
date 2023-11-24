<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="styles.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 13</title>
    </head>
    <body>
        <h1>Practica 13</h1>
        <h2>Registros a borrar</h2>
        <form action="ejercicio3.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <?php
                    $db_hostname = "localhost";
                    $db_database = "deportes";
                    $db_username = "root";
                    $db_password = "";
                    $conexion = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
                    if (mysqli_connect_errno()) {
                        echo "Conexion fallida";
                        exit();
                    } else {
                        mysqli_select_db($conexion, $db_database);
                        $tabla = $_POST['tabla'];
                        $consulta = ("select * from ". $tabla);
                        $resultado = mysqli_query($conexion, $consulta);
                        if ($tabla == "articulos") {
                            echo "<table border=1 class='table table-dark table-striped-columns'>
                                <tr>
                                    <th width=10%>CodArt</th>
                                    <th width=10%>Descripcion</th>
                                    <th width=10%>PrecioCompra</th>
                                    <th width=10%>PVP</th>
                                    <th width=10%>FechaCompra</th>
                                    <th width=10%>Stock</th>
                                    <th width=10%>Proveedor</th>
                                </tr>";
                            while ( $filas = mysqli_fetch_assoc($resultado) ) {
                                $codigoArticulo=$filas['CodArt'];
                                echo "
                                    <tr>
                                        <div class='checkmark'>
                                            <td width=10% value='$codigoArticulo' name='$codigoArticulo'>
                                                <input type='checkbox' checked='checked' name='codArticulo[]' id='name='codArticulo'>",
                                                $filas['CodArt'],"
                                            </td>
                                        </div>
                                        <td width=10%> ",$filas['Descripcion']," </td>
                                        <td width=10%> ",$filas['PrecioCompra']," </td>
                                        <td width=10%> ",$filas['PVP']," </td>
                                        <td width=10%> ",$filas['FechaCompra']," </td>
                                        <td width=10%> ",$filas['Stock']," </td>
                                        <td width=10%> ",$filas['Proveedor']," </td>
                                    </tr>";
                            }
                            echo "</table>";

                            echo "<select name='tabla' id='tabla' hidden>
                                    <option value='articulos'>Articulos</option>
                            </select>";

                        } else {
                            echo "<table border=1 class='table table-dark table-striped-columns'>
                                <tr>
                                    <th width=10%>CodCli</th>
                                    <th width=10%>Nombre</th>
                                    <th width=10%>FechaNacimiento</th>
                                    <th width=10%>Telefono</th>
                                </tr>";
                            while ( $filas = mysqli_fetch_assoc($resultado) ) {
                                $codigoCliente=$filas['CodCli'];
                                echo "
                                    <tr>
                                        <div class='checkmark'>
                                            <td width=10% value='$codigoCliente' name='$codigoCliente'>
                                                <input type='checkbox' checked='checked' name='codCliente[]' id='codCliente'>",
                                                $filas['CodCli'],"
                                            </td>
                                        </div>
                                        <td width=10%> ",$filas['Nombre']," </td>
                                        <td width=10%> ",$filas['FechaNac']," </td>
                                        <td width=10%> ",$filas['Tfno']," </td>
                                    </tr>";
                            }
                            echo "</table>";
                            echo "<select name='tabla' id='tabla' hidden>
                                    <option value='clientes'>Articulos</option>
                                </select>";
                        }
                    }
                ?>
            </fieldset>
            <input type="submit" value="Enviar" class="btn btn-primary"/>
            <input type="reset" value="Borrar" class="btn btn-secondary"/>
        </form>
    </body>
</html>