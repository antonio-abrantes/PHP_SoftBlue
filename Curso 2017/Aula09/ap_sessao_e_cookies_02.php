<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php
    session_start();

    if(!isset($_SESSION["usuario"])){
        echo "Usuario não cadastrado";
        exit(1);
    }

    echo "Ola! Bem vindo ".$_SESSION["usuario"]."<br>";
?>

    [conteudo sigiloso/ dados]

</body>
</html>