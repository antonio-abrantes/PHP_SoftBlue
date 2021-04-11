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

$strExemplo = " Frase é composta de exemplo para aula ";

echo $strExemplo . "<br>";

$x = utf8_decode($strExemplo);
echo strlen($x) . "<br>";

$x = str_replace("de exemplo", "", $strExemplo);
echo $x . "<br>";

$x = str_replace(" ", "_", $strExemplo);
echo $x . "<br>";

$x = explode(" ", $strExemplo);
print_r($x);
echo "<br>";

$x = sha1($strExemplo);
echo $x . "<br>";

$x = crypt($strExemplo, "senha");
echo $x . "<br>";

$x = md5($strExemplo);
echo $x . "<br>";

echo 1 == "1";
echo "<br>";

echo 'soft' . 'blue';
echo "<br>";

$minhaStr = "Programador de Algoritmos";

for($x=0; $x<3; $x++) {

  $minhaStr = substr($minhaStr, $x, $x+1);

}

echo $minhaStr;

?>


</body>
</html>