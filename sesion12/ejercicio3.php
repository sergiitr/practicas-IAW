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
                $codcliente = $_POST['codcliente'];
                $consulta = "delete from clientes where CodCli='$codcliente'";
                $resultado = mysqli_query($conexion,$consulta);
                $consulta2 = ("create trigger BorrarRegistros before delete on clientes
                                for each row
                                begin
                                    delete from ventas where codcli=old.codcli;
                                end");
                $resultado2 = mysqli_query($conexion, $consulta2);
                
                $consulta3 = ("select ventas.* from clientes,ventas where clientes.CodCli='$codcliente' and clientes.CodCli=ventas.CodCli");
                $resultado3 = mysqli_query($conexion, $consulta3);
                echo "<table border=1 class='table table-dark table-striped-columns'>
                        <tr>
                            <th width=10%>CodCli</th>
                            <th width=10%>CodArt</th>
                            <th width=10%>Unidades</th>
                            <th width=10%>Descuento</th>
                            <th width=10%>FechaVenta</th>
                        </tr>
                    </table>";
                while ( $filas = mysqli_fetch_assoc($resultado3) ) {
                    echo "<table border=1 class='table table-dark table-striped-columns'>
                            <tr>
                                <td width=10% >",$filas['CodCli']," </td>
                                <td width=10%> ",$filas['CodArt']," </td>
                                <td width=10%> ",$filas['Unidades']," </td>
                                <td width=10%> ",$filas['Descuento']," </td>
                                <td width=10%> ",$filas['FechaVenta']," </td>
                            </tr>
                        </table>";
                }
                echo "<br><br><h2>Lista de clientes actualizados</h2>";
                $consulta4 = ("select * from clientes");
                $resultado4 = mysqli_query($conexion, $consulta4);
                echo "<table border=1 class='table table-dark table-striped-columns'>
                        <tr>
                            <th width=10%>CodCli</th>
                            <th width=10%>Nombre</th>
                            <th width=10%>FechaNac</th>
                            <th width=10%>Tfno</th>
                        </tr>
                    ";
                while ( $filas = mysqli_fetch_assoc($resultado4) ) {
                    echo "
                            <tr>
                                <td width=10% >",$filas['CodCli']," </td>
                                <td width=10%> ",$filas['Nombre']," </td>
                                <td width=10%> ",$filas['FechaNac']," </td>
                                <td width=10%> ",$filas['Tfno']," </td>
                            </tr>
                        </table>";
                }
            }
        ?>
        <script>

                window.open("./pupus.html","ventana1","width=300,height=100,scrollbars=NO")
        </script>
        <p>Ver trigger pulsando <a href="./trigger.txt">aqui</a></p>
    </body>
</html>