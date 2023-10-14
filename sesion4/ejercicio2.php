<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="ejercicio2.css"/>
    </head>
    <body>
        <div id="general">
            <form action="ejercicio2.2.php" method="post">
                <fieldset>
                    <legend>Iniciar sesión</legend>
                <fieldset>
                <table>
                    <tr>
                        <td>Usuario:</td>
                        <td><input name='usuario' type="text" required></input>
                    </tr>
                    <tr>
                        <td>Contraseña:</td>
                        <td><input name='contrasena' type="password" required></input>
                    </tr>
                    <tr>
                        <td>Server choise:</td>
                        <td>
                            <select name="servidor">
                                <option value="mysql">MySQL</option>
                                <option value="mariadb">MariaDB</option>
                            </select>
                    </tr>
                </table>
                <div id="boton">
                    <input type="submit" value="Iniciar sesion" class="button"/>
                </div>
            </form>
        </div>
    </body>
</html>