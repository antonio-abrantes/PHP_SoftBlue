<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulando arquivos</title>
</head>
<body>

<?php

// $filePath = "./temp/file.txt";
// $fileSize = filesize($filePath);

// $file = fopen($filePath, "r");

// echo fread($file, $fileSize);
// echo "<br>";

// fclose($file);

// $fileArray = file($filePath); // Não precisa do fclose();

//  foreach ($fileArray as $elemento) {
//      echo utf8_encode($elemento)."<br>";
//  }

// $dir = opendir("./temp");
// echo readdir($dir)."<br>";
// echo readdir($dir)."<br>";
// echo readdir($dir)."<br>";
// echo readdir($dir)."<br>";
// echo readdir($dir)."<br>";

// closedir("./temp");

// $meuCaminho = "./teste.txt";
// $meuArquivo = fopen($meuCaminho, "a+");
// fwrite($meuArquivo, "Softblue");
// $meuArquivo = fopen($meuCaminho, "a+");
// echo fread($meuCaminho, 10);

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