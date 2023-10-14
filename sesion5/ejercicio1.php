<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Practica 5 - Curriculum Vitae</title>
        <link rel="stylesheet" type="text/css" href="ejercicio1.css"/>
    </head>
    <body>
        <h1>Practica 5 - Curriculum Vitae</h1>
        <form action="ejercicio1.1.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Introduce sus datos</legend>
                <table align="center">
                    <tr>
                        <td id="noparam"><p>Nombre: </p></td>
                        <td id="param"><input name='nombre' type="text" required></td>
                    </tr>
                    <tr>
                        <td id="noparam"><p>Apellidos: </p></td>
                        <td id="param"><input name='apellidos' type="text" required></td>
                    </tr>
                    <tr>
                        <td id="noparam"><p>Telefono: </p></td>
                        <td id="param"><input type="number" id="telefono" name="telefono" minlength="9" maxlength="9" required></td>
                    </tr>
                    <tr>
                        <td id="noparam"><p>Fecha nacimiento: </p></td>
                        <td id="param"><input name='f_nac' type="date" required></td>
                    </tr>
                    <tr>
                        <td id="noparam"><p>Mail: </p></td>
                        <td id="param"><input name='mail' type="text" required></td>
                    </tr>
                    <tr>
                        <td id="noparam"><p>Titulacion: </p></td>
                        <td id="param"><input name='titulacion' type="text" required></td>
                    </tr>
                    <tr>
                        <td id="noparam"><p>Fecha Titulacion: </p></td>
                        <td id="param"><input name='f_titulacion' type="date" required></td>
                    </tr>
                    <tr>
                        <td id="noparam"><p>Experiencia previa (separada por ';'): </p></td>
                        <td id="param"><input name='experiencia' type="comment"></td>
                    </tr>
                    <tr>
                        <td id="noparam"><p>Idiomas y Niveles: </p></td>
                        <td id="param">
                            <div class="idioma-nivel">
                                <input name="idioma1" type="text" placeholder="Idioma">
                                <select name="idioma1_nivel">
                                    <option value="">Seleccionar una opción</option>
                                    <option value="A1">A1</option>
                                    <option value="A2">A2</option>
                                    <option value="B1">B1</option>
                                    <option value="B2">B2</option>
                                    <option value="C1">C1</option>
                                    <option value="C2">C2</option>
                                </select>
                            </div>
                            <div class="idioma-nivel">
                                <input name="idioma2" type="text" placeholder="Idioma">
                                <select name="idioma2_nivel">
                                    <option value="">Seleccionar una opción</option>
                                    <option value="A1">A1</option>
                                    <option value="A2">A2</option>
                                    <option value="B1">B1</option>
                                    <option value="B2">B2</option>
                                    <option value="C1">C1</option>
                                    <option value="C2">C2</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td id="noparam"><p>Capacidades (separadas por ';'): </p></td>
                        <td id="param"><input name='capacidades' type="text" required></td>
                    </tr>
                    <tr>
                        <td id="noparam"><p>Foto: </p></td>
                        <td id="param"><input name='foto' type="file" accept="image/png, image/jpeg" required></td>
                    </tr>
                </table>
                <input type="submit" value="Enviar" class="button"/>
                <input type="reset" value="Borrar" class="button"/>
            </fieldset>
        </form> 
    </body>
</html>