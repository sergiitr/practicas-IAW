<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 12</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
    </head>
    <body>
        <h1>Ejercicio 12</h1>
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
                        $codcliente = $_POST['codigo'];
                        $consulta = ("select ventas.* from clientes,ventas where clientes.CodCli='$codcliente' and clientes.CodCli=ventas.CodCli");
                        $resultado = mysqli_query($conexion, $consulta);
                        echo "<table border=1 class='table table-dark table-striped-columns'>
                                <tr>
                                    <th width=10%>CodCli</th>
                                    <th width=10%>CodArt</th>
                                    <th width=10%>Unidades</th>
                                    <th width=10%>Descuento</th>
                                    <th width=10%>FechaVenta</th>
                                </tr>
                            </table>";
                        while ( $filas = mysqli_fetch_assoc($resultado) ) {
                            $codigoCliente=$filas['CodCli'];
                            echo "
                                <table border=1 class='table table-dark table-striped-columns'>
                                    <tr>
                                        <td width=10% value='$codigoCliente' name='$codigoCliente'>",$filas['CodCli']," </td>
                                        <td width=10%> ",$filas['CodArt']," </td>
                                        <td width=10%> ",$filas['Unidades']," </td>
                                        <td width=10%> ",$filas['Descuento']," </td>
                                        <td width=10%> ",$filas['FechaVenta']," </td>
                                    </tr>
                                </table>";
                        }
                    }
                ?>
            </fieldset>
            <form action="ejercicio3.php" method="post">
                <?php
                    echo "<input type='text' name='codcliente' id='codcliente' value='".$_POST['codigo']."' hidden>";
                ?>
                
                <input type="submit" value="Enviar" class="btn btn-primary"/>
                <input type="reset" value="Borrar" class="btn btn-secondary"/>
            </form>
        </form> 
    </body>
</html>