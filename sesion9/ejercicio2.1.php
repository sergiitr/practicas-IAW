<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Practica 9 - Ejercicio 2</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
    </head>
    <body>
        <h1> Practica 9 - Ejercicio 2 </h1>
        <?php
            //require_once 'login.php';
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
                $consulta = ("select CodArt,articulos.Descripcion,PrecioCompra,PVP,FechaCompra,Stock,proveedores.descripcion as descrip from articulos,proveedores where proveedores.codigo=articulos.proveedor and proveedores.codigo='$_POST[marca]'");
                $resultado = mysqli_query($conexion, $consulta);
                echo "<table border=1><tr><th style=width:7.5%>CodArt</th><th style=width:25%>Descripcion </th><th width=10%> PrecioCompra </th><th width=10%> PVP </th><th width=20%>Fecha Compra</th><th width=10%> Stock </th><th> descripcion</th></tr></table>";
                while ( $filas = mysqli_fetch_assoc($resultado) ) {
                    $date = date_create($filas['FechaCompra']) ;
                    echo "<table border=1><tr>
                            <td style=width:7.5%>",$filas['CodArt']," </td><td style=width:25%> ",$filas['Descripcion']," </td><td width=10%> ",$filas['PrecioCompra']," </td><td width=10%> ",$filas['PVP']," </td><td width=20%> ",$date->format('d-m-Y')," </td><td width=10%> ",$filas['Stock']," </td><td> ",$filas['descrip'],
                        "</td></tr></table>";
                }
            }
        ?>
        <p>Para ver el fichero pulse <a href="./ejercici2.1.txt">aqui</a></p>
    </body>
</html>