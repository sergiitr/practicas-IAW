<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Practica 9 - Ejercicio 2</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
    </head>
    <body>
        <h1> Practica 10 - Ejercicio 2 </h1>
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
                $codart = $_POST['codigo'];
                $descrip = $_POST['descripcion'];
                $preciocompra = $_POST['PrecioCompra'];
                $pvp = $_POST['pvp'];
                $fechacompra = $_POST['f_compra'];
                $stock = $_POST['stock'];
                $provee = $_POST['marca'];
                $res2 = mysqli_query($conexion,"select codart from articulos where codart ='$codart'");
                $totalfilas = mysqli_num_rows($res2);
                if ($totalfilas == 0){
                    $consulta3 = "INSERT into articulos values('$codart','$descrip','$preciocompra','$pvp','$fechacompra','$stock','$provee');";
                    $res3 = mysqli_query($conexion,$consulta3);
                    echo "<p>Se ha insertado correctamente</p>";
                } else
                    echo "<center><h2>Ya existe un articulo con codigo $codart</h2></center><br><br>";
                
                $consulta = "select CodArt, articulos.Descripcion, PrecioCompra, PVP, FechaCompra, Stock, proveedores.descripcion as descrip from articulos, proveedores where articulos.proveedor = proveedores.codigo";
                $resultado = mysqli_query($conexion,$consulta);
                $consulta = ("select CodArt,articulos.Descripcion,PrecioCompra,PVP,FechaCompra,Stock,proveedores.descripcion as descrip from articulos,proveedores where proveedores.codigo=articulos.proveedor and proveedores.codigo='$_POST[marca]'");
                $resultado = mysqli_query($conexion, $consulta);
                echo "<table border=1><tr><th style=width:7.5%>CodArt</th><th style=width:25%>Descripcion </th><th width=10%> PrecioCompra </th><th width=10%> PVP </th><th width=20%>Fecha Compra</th><th width=10%> Stock </th><th> descripcion</th></tr></table>";
                while ( $filas = mysqli_fetch_assoc($resultado) ) {
                    $date = date_create($filas['FechaCompra']) ;
                    echo "<table border=1><tr>
                            <td style=width:7.5%>",$codart," </td><td style=width:25%> ",$descrip," </td><td width=10%> ",$preciocompra," </td><td width=10%> ",$pvp," </td><td width=20%> ",$fechacompra," </td><td width=10%> ",$stock," </td><td> ",$provee,
                        "</td></tr></table>";
                }
            }
        ?>
        <p>Para ver el fichero pulse <a href="./ejercicio2.txt">aqui</a></p>
    </body>
</html>

