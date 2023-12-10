<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="styles.css"/>
        <title>Practica 15</title>
    </head>
    <body>
        <h1>Practica 15 - Encriptacion</h1>
        <h2>Iniciar Sesión</h2>
        <form action="login.php" method="post">
            <table align="center" class="table table-dark table-striped-columns">
                <tr>
                    <td id="noparam"><label for="usuario"><p>Usuario:</p></label></td>
                    <td id="param"><input type="text" name="usuario" required></td>
                </tr>
                <br>
                <tr>
                    <td id="noparam"><label for="contrasena"><p>Contraseña:</p></label></td>
                    <td id="param"><input type="password" name="contrasena" required></td>
                </tr>
            </table>
            <input type="submit" value="Iniciar Sesión" class="button"></td>
        </form>
    </body>
</html>