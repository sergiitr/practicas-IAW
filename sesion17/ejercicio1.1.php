<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Practica 17</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
    </head>
    <body>
        <h1>Practica 17 - Ejercicio 1</h1>
        <?php
            session_start();
            if ($_POST["numero"] == $_SESSION["aleatorio"]) {
                echo "";
                echo "<h3>Has realizado ",$_SESSION["intentos"], " intentos </h3>";
                $_SESSION["array"][] = $_POST["numero"];
                echo "<br> <h3>LOS NUMEROS INTRODUCIDOS SON : ";
                foreach ($_SESSION["array"] as $num) {
                    if (count($_SESSION["array"]) <= 1)
                        echo $num;
                    else 
                        echo $num," - ";
                }
                echo "</h3>";
                session_destroy();
            } else {
                $_SESSION["array"][] = $_POST["numero"];
                $_SESSION["intentos"]++;
                header('location:./ejercicio1.2.php');
            }
        ?>
    </body>
</html>