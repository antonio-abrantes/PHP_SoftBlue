<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Softblue</title>
</head>

<body>
    <?php
        define("NOME", "Antonio Abrantes"); 
        const PI = 3.14;
    
        echo NOME.'<br>';

        echo round(5.5, 0, PHP_ROUND_HALF_UP);

            $x = 3 > 4 ? "<br>MAIOR" : "<br>MENOR";

        echo $x."<br><br>";

        //Continua executando mesmo que o arquivo especificado não exista
        // include "./auxiliar_parte01.php";
        // include "./auxiliar_parte01.php";

        // include_once "./auxiliar_parte01.php";
        // include_once "./auxiliar_parte01.php";

        //Para a execução caso o arquivo especificado não exista
        // require "./auxiliar_parte01.php";

        require_once "./auxiliar_parte01.php";

        // teste01();

        // echo funcaoDobro(5)."<br>";

        // header("Location: https://antonio-abrantes.github.io/");
    
     ?>
</body>

</html>