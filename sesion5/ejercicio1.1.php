<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Practica 5 - Curriculum Vitae</title>
        <link rel="stylesheet" type="text/css" href="salida.css"/>
    </head>
    <body>
        <div id="fotoynombre">
            <div id="foto">
                <?php
                    if ($_FILES["foto"]["error"] == UPLOAD_ERR_OK) {
                        $tipo = $_FILES["foto"]["type"];
                        $archivo_temporal = $_FILES["foto"]["tmp_name"];
                        if ($tipo == "image/jpeg" || $tipo == "image/png") {
                            $nombre_archivo = $_FILES["foto"]["name"];
                            $ruta_destino = "C:/wamp64/www/practicas IAW/practica5/".$nombre_archivo;
                            move_uploaded_file($archivo_temporal, $ruta_destino);
                            echo "<img src='/practicas IAW/practica5/",$nombre_archivo,"' alt='Imagen'></img>";
                        } else
                            echo "<p>Fichero incorrecto. Solo se permiten archivos JPEG y PNG.</p>";
                    } else
                        echo "<p>Error al subir la imagen.</p>";
                ?>
            </div>
            <div id="nombreytitulacion">
                <?php
                    echo "<h1>",$_POST['nombre'],$_POST['apellidos'],"</h1>";
                    echo "<h3>",$_POST['titulacion'],"</h3>";
                ?>
            </div>
        </div>
        <div id="grupal">
            <div id="izq">
                <h2>Información</h2>
                <?php
                    echo "<li>Telefono: ",$_POST['telefono'],"</li>";
                    $f_nacimiento = date( "d-m-Y", strtotime($_POST['f_nac']) );
                    echo "<li>Fecha nacimiento: ",$f_nacimiento,"</li>";
                    echo "<li>Email: ",$_POST['mail'],"</li>";
                ?>
            </div>
            <div id="der">
                <h2>Educación</h2>
                <?php
                    $f_titulacion = date( "d-m-Y", strtotime($_POST['f_titulacion']) );
                    echo "<li>",$_POST['titulacion'], " con fecha titulacion: ",$f_titulacion,"</li>";
                ?>
                <h2>Experiencia previa</h2>
                <?php
                    if (isset($_POST['experiencia'])) {
                        $capacidades = explode(';', $_POST['experiencia']);
                        foreach ($capacidades as $capacidad) {
                            $capacidad = trim($capacidad);
                            if (!empty($capacidad))
                                echo "<li>", $capacidad, "</li>";
                        }
                    }
                ?>
                <h2>Idiomas</h2>
                <?php
                    echo "<li>",$_POST['idioma1'],": ",$_POST['idioma1_nivel'],"</li>";
                    echo "<li>",$_POST['idioma2'],": ",$_POST['idioma2_nivel'],"</li>";
                ?>
                <h2>Capacidades</h2>
                <?php
                    if (isset($_POST['capacidades'])) {
                        $capacidades = explode(';', $_POST['capacidades']);
                        foreach ($capacidades as $capacidad) {
                            $capacidad = trim($capacidad);
                            if (!empty($capacidad))
                                echo "<li>", $capacidad, "</li>";
                        }
                    }
                ?>
            </div>
        </div>
    </body>
</html>