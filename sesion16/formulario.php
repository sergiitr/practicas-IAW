<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
    </head>
    <body>
        <h1 class="pt-1">Practica 16 - Imagen captcha</h1>
        <img src="./imagen.php" class="pt-3">
        <form action="./valor.php" method="post" enctype="multipart/form-data" class="pt-3">
            Valor: <input type="text" name="valor" id="valor">
            <input type="submit" value="Enviar" class="btn btn-primary"/>
            <input type="reset" value="Borrar" class="btn btn-secondary"/>
        </form>
    </body>
</html>