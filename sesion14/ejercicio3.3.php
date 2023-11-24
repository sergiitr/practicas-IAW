<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 14</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
    </head>
    <body>
        <h1>Practica 14</h1>
        <h2>Ejercicio 3</h2>
        <form method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Introduce sus datos</legend>
                <table align="center" class="table table-dark table-striped">
                    <tr>
                        <td id="noparam"><p>CodCli: </p></td>
                        <td id="param">
                            <?php
                                echo "<input name='codcli' type='number' value='$_SESSION[codcliente]' readonly>";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td id="noparam"><p>Nombre: </p></td>
                        <td id="param">
                            <?php
                                $db_hostname = "localhost";
                                $db_database = "deportes";
                                $db_username = "root";
                                $db_password = "";
                                $link = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
                                $codigo_cliente = $_POST['codcli'];
                                $actNom = $_POST['nombreCli'];
                                $sql = "update clientes set Nombre='$actNom' where CodCli='$codigo_cliente'";
                                if(mysqli_query($link, $sql)) {
                                    $resultado = mysqli_query($link, "select * from clientes where CodCli=$codigo_cliente");
                                    while ( $filas = mysqli_fetch_assoc($resultado) ) {
                                        echo "<input name='nombre' type='text' value='$filas[Nombre]' readonly>";
                                    }
                                } else
                                    echo "No actualiza";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td id="noparam"><p>Fecha nacimiento: </p></td>
                        <td id="param">
                            <?php
                                $db_hostname = "localhost";
                                $db_database = "deportes";
                                $db_username = "root";
                                $db_password = "";
                                $link = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
                                $codigo_cliente = $_POST['codcli'];
                                $actFNac = $_POST['fnac'];
                                $sql = "update clientes set FechaNac='$actFNac' where CodCli='$codigo_cliente'";
                                if(mysqli_query($link, $sql)) {
                                    $resultado = mysqli_query($link, "select * from clientes where CodCli=$codigo_cliente");
                                    while ( $filas = mysqli_fetch_assoc($resultado) ) {
                                        echo "<input name='fecha' type='date' value='$filas[FechaNac]' readonly>";
                                    }
                                } else
                                    echo "No actualiza";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td id="noparam"><p>Telefono: </p></td>
                        <td id="param">
                            <?php
                                $db_hostname = "localhost";
                                $db_database = "deportes";
                                $db_username = "root";
                                $db_password = "";
                                $link = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
                                $codigo_cliente = $_POST['codcli'];
                                $actTfno = $_POST['tlfn'];
                                $sql = "update clientes set Tfno='$actTfno' where CodCli='$codigo_cliente'";
                                if(mysqli_query($link, $sql)) {
                                    $resultado = mysqli_query($link, "select * from clientes where CodCli=$codigo_cliente");
                                    while ( $filas = mysqli_fetch_assoc($resultado) ) {
                                        echo "<input name='tfno' type='number' value='$filas[Tfno]' readonly>";
                                    }
                                } else
                                    echo "No actualiza";
                            ?>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form> 
    </body>
</html>