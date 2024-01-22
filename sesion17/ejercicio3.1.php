<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="styles.css"/>
            <title>Practica 17</title>
    </head>
    <body>
        <h1>Practica 17 - Ejercicio 3</h1>
        <h2>Cifrado y descifrado</h2>
        <br>
        <?php
            $texto = $_POST['cifrado'];
            $est = $_POST['estado'];
            $cant = strlen($texto);
            echo "<h3>Clave: $texto </h3>";
            $abe= array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
            $eba= array('d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','a','b','c');
            if ($est == "cifrar") {
                echo "<h4> La clave con cifrado cesar: </h4>";
                for ($i=0; $i<$cant; $i++) {
                    $char = substr($texto, $i, 1);
                    for($z=0; $z<26; $z++) {
                        if( $char==$abe[$z] ){   
                            $cifr =  $eba[$z];
                            echo "$cifr";
                        }
                    }
                }
            }
            if ($est == "descifrar") {
                echo "<h4> La clave con descifrada es: </h4>";
                for($i=0; $i<$cant; $i++){
                    $char = substr($texto, $i, 1);
                    for($z=0; $z<26; $z++){
                        if( $char==$eba[$z] ){   
                            $cifr =  $abe[$z];
                            echo "$cifr";
                        }
                    }
                }
            }
        ?>
    </body>
</html>