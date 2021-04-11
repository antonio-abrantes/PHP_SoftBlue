<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$meuCaminho = "./temp/Delphi10.txt";
$meuArquivo = fopen($meuCaminho, "r");
$fileSize = filesize($meuCaminho);
// echo filesize($meuCaminho);

$conteudo = fread($meuArquivo, $fileSize);

$lista = explode(";", $conteudo);

 foreach ($lista as $elemento) {
     echo utf8_encode($elemento)."<br>";
 }

?>
    
</body>
</html>