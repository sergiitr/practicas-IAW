<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Practica 14</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
    </head>
    <body>
        <?php
            if (!isset($_SESSION['codcliente'])) 
                $_SESSION['codcliente'] = $_POST['$codcliente'];
        ?>
        <h1>Practica 14</h1>
        <h2>Ejercicio 3</h2>
        <form action="ejercicio3.3.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend id="int">Actualice los datos</legend>
                <table align="center" class="table table-dark table-striped">
                    <tr>
                        <td id="noparam"><p>CodCli: </p></td>
                        <td id="param">
                            <?php
                                echo "<input id='codcli' name='codcli' type='number' value='$_SESSION[codcliente]' readonly>";
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
                                $conexion = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
                                $codigo_cliente = $_POST['codcliente'];
                                $resultado = mysqli_query($conexion, "select * from clientes where CodCli=$codigo_cliente");
                                while ( $filas = mysqli_fetch_assoc($resultado) ) {
                                    $nombre=$filas['Nombre'];
                                    echo "<input name='nombreCli' id='nombreCli' type='text' value='$nombre'>";
                                }
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
                                $conexion = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
                                $codigo_cliente =$_POST['codcliente'];
                                $resultado = mysqli_query($conexion, "select * from clientes where CodCli=$codigo_cliente");
                                while ( $filas = mysqli_fetch_assoc($resultado) ) {
                                    echo "<input name='fnac' type='date' value='$filas[FechaNac]'>";
                                }
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
                                $conexion = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
                                $codigo_cliente =$_POST['codcliente'];
                                $resultado = mysqli_query($conexion, "select * from clientes where CodCli=$codigo_cliente");
                                while ( $filas = mysqli_fetch_assoc($resultado) ) {
                                    echo "<input name='tlfn' type='number' maxlength=9 value='$filas[Tfno]'>";
                                }
                            ?>
                        </td>
                    </tr>
                </table>
            </fieldset>
            <input type="submit" value="Enviar" class="button"/>
            <input type="reset" value="Borrar" class="button"/>
        </form> 
    </body>
</html>