<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Practica 7 - Curriculum Vitae</title>
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
                            $ruta_destino = "./".$nombre_archivo;
                            move_uploaded_file($archivo_temporal, $ruta_destino);
                            echo "<img src='./",$nombre_archivo,"' alt='Imagen'></img>";
                        } else
                            echo "<p>Fichero incorrecto. Solo se permiten archivos JPEG y PNG.</p>";
                    } else
                        echo "<p>Error al subir la imagen.</p>";
                ?>
            </div>
            <div id="nombreytitulacion">
                <?php
                    $nombre = filter_var($_POST['nombre'],FILTER_SANITIZE_STRING);
                    $apellidos = filter_var($_POST['apellidos'],FILTER_SANITIZE_STRING);
                    $titulacion = filter_var($_POST['titulacion'],FILTER_SANITIZE_STRING);
                    if (!$nombre || !$apellidos)
                        echo "<h1>Hay un fallo en el nombre o en los apellidos</h1>";
                    else
                        echo "<h1>",$_POST['nombre']," ",$_POST['apellidos'],"</h1>";
                    if (!$titulacion)
                        echo "<h3>Hay un fallo en la titulacion</h3>";
                    else
                        echo "<h3>",$_POST['titulacion'],"</h3>";
                ?>
            </div>
        </div>
        <div id="grupal">
            <div id="izq">
                <h2>Información</h2>
                <?php
                    $tlfn = $_POST['telefono'];
                    if (strlen($tlfn) == 9)
                        echo "<li>Telefono: ",$tlfn,"</li>";
                    else {
                        echo "<li>Telefono: ",substr($tlfn, 0, 9),"</li>";
                    }
                    
                    $f_nacimiento = date( "d-m-Y", strtotime($_POST['f_nac']) );
                    echo "<li>Fecha nacimiento: ",$f_nacimiento,"</li>";
                    
                    $email = filter_var($_POST['mail'],FILTER_SANITIZE_EMAIL);
                    if (!$email)
                        echo "<li>Hay un fallo en el email</li>";
                    else
                        echo "<li>Email: ",$email,"</li>";
                    
                    $url = filter_var($_POST['url'],FILTER_SANITIZE_URL);
                    if (!$url)
                        echo "<li>Hay un fallo en la URL introducida</li>";
                    else
                        echo "<li>URL personal pulsando <a href=http://",$url,">",$url,"</a></li>";
                ?>
            </div>
            <div id="der">
                <h2>Educación</h2>
                <?php
                    $f_titulacion = $_POST['f_titulacion'] ;
                    if ($f_titulacion==range(1980,2023))
                        echo "<li>",$_POST['titulacion'], " con fecha titulacion: ",$f_titulacion,"</li>";
                    elseif ($f_titulacion > 2023)
                        echo "<li>Todavia no ha titulado</li>";
                    else
                        echo "<li>Ha cambiado el plan de estudios</li>";
                ?>
                <h2>Experiencia previa</h2>
                <?php
                    if (isset($_POST['experiencia'])) {
                        $capacidades = explode(';', $_POST['experiencia']);
                        foreach ($capacidades as $capacidad) {
                            $capacidad = trim($capacidad);
                            if (!empty($capacidad))
                                echo "<li>", $capacidad, "</li>";
                            else
                                echo "<li>No tengo experiencia</li>";
                        }
                    }
                ?>
                <h2>Idiomas</h2>
                <?php
                    if ($_POST['idioma1']!=null && $_POST['idioma1']!=null) {
                        echo "<li>",$_POST['idioma1'],": ",$_POST['idioma1_nivel'],"</li>";
                        echo "<li>",$_POST['idioma2'],": ",$_POST['idioma2_nivel'],"</li>";
                    } else {
                        echo "<li>No tengo idiomas</li>";
                    }
                ?>
                <h2>Capacidades</h2>
                <?php
                    if (isset($_POST['capacidades'])) {
                        $capacidades = explode(';', $_POST['capacidades']);
                        foreach ($capacidades as $capacidad) {
                            $capacidad = trim($capacidad);
                            if (!empty($capacidad))
                                echo "<li>", $capacidad, "</li>";
                            else
                                echo "<li>No tengo capacidades</li>";
                        }
                    }
                ?>
            </div>
        </div>
    </body>
</html>