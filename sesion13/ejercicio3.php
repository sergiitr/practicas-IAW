<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 13</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
    </head>
    <body>
        <h1>Ejercicio 13</h1>
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
            
                if ($tabla == "articulos") {
                        foreach ( $_POST["codArticulo"] as $codArticulo ) {
                            $consulta = "delete from articulos where CodArt='$codArticulo'";
                        }
                        $resultado = mysqli_query($conexion,$consulta);
                        $consulta2 = ("create trigger BorrarRegistros before delete on clientes
                                    for each row
                                    begin
                                        delete from ventas where CodArt=old.CodArt;
                                    end");
                        $resultado2 = mysqli_query($conexion, $consulta2);
    
                        $consulta4 = ("select * from articulos");
                        $resultado4 = mysqli_query($conexion, $consulta4);
                        
                        echo "<table border=1 class='table table-dark table-striped-columns'>
                                <tr>
                                    <th width=10%>CodArt</th>
                                    <th width=10%>Descripcion</th>
                                    <th width=10%>PrecioCompra</th>
                                    <th width=10%>PVP</th>
                                    <th width=10%>FechaCompra</th>
                                    <th width=10%>Stock</th>
                                    <th width=10%>Proveedor</th>
                                </tr>
                            </table>";
                        while ( $filas = mysqli_fetch_assoc($resultado4) ) {
                            echo "<table border=1 class='table table-dark table-striped-columns'>
                                    <tr>
                                        <td width=10% value='$codigoArticulo' name='$codigoArticulo'>", $filas['CodArt']," </td>
                                        <td width=10%> ",$filas['Descripcion']," </td>
                                        <td width=10%> ",$filas['PrecioCompra']," </td>
                                        <td width=10%> ",$filas['PVP']," </td>
                                        <td width=10%> ",$filas['FechaCompra']," </td>
                                        <td width=10%> ",$filas['Stock']," </td>
                                        <td width=10%> ",$filas['Proveedor']," </td>
                                    </tr>
                                </table>";
                        }
                } else {
                    foreach ( $_POST["codCliente"] as $codcliente ) {
                        $consulta = "delete from clientes where CodCli='$codcliente'";
                    }
                    $resultado = mysqli_query($conexion,$consulta);
                    $consulta2 = ("create trigger BorrarRegistros before delete on clientes
                                for each row
                                begin
                                    delete from ventas where CodCli=old.CodCli;
                                end");
                    $resultado2 = mysqli_query($conexion, $consulta2);

                    $consulta4 = ("select * from clientes");
                    $resultado4 = mysqli_query($conexion, $consulta4);
                    
                    echo "<table border=1 class='table table-dark table-striped-columns'>
                            <tr>
                                <th width=10%>CodCli</th>
                                <th width=10%>Nombre</th>
                                <th width=10%>FechaNacimiento</th>
                                <th width=10%>Telefono</th>
                            </tr>";
                    while ( $filas = mysqli_fetch_assoc($resultado4) ) {
                        echo "<tr>
                                    <td width=10%>", $filas['CodCli'], "</td>
                                    <td width=10%> ",$filas['Nombre']," </td>
                                    <td width=10%> ",$filas['FechaNac']," </td>
                                    <td width=10%> ",$filas['Tfno']," </td>
                                </tr>";
                    }
                    echo "</table>";
                }
            }
        ?>
        <p>Ver trigger pulsando <a href="./trigger.txt">aqui</a></p>
    </body>
</html>