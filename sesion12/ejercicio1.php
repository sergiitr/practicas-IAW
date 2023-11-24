<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Practica 12</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
    </head>
    <body>
        <h1>Practica 12</h1>
        <h2>Escoger Cliente</h2>
        <hr>
        <form action="ejercicio2.php" method="post" enctype="multipart/form-data">
            <fieldset id="int">
                <table align="center" class="table table-dark table-striped-columns">
                    <tr>
                        <td id="noparam">Escoja el cliente:</td>
                        <td id="param">
                            <select name="codigo" id="codigo">
                                <?php
                                    $db_hostname = "localhost";
                                    $db_database = "deportes";
                                    $db_username = "root";
                                    $db_password = "";
                                    $conexion = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
                                    $resultado = mysqli_query($conexion, "select * from clientes");
                                    while ( $filas = mysqli_fetch_assoc($resultado) ) {
                                        echo "<option value='$filas[CodCli]'>",$filas['Nombre'],"</option>";
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                </table>
            </fieldset>
            <input type="submit" value="Enviar" class="btn btn-primary"/>
            <input type="reset" value="Borrar" class="btn btn-secondary"/>
        </form> 
    </body>
</html>