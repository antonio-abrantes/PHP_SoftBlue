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

$arrayExemplo1 = array("Php", "SQL", 100, "Java");
$arrayExemplo2 = array("linguagem1" => "Php", "linguagem2" => "SQL", "linguagem3" => "Java");

print_r($arrayExemplo2);
echo "<br>";

echo count($arrayExemplo2);
echo "<br>";

foreach ($arrayExemplo2 as $key => $value) {
    echo $key . " - " . $value;
    echo "<br>";
}
echo "<br>";

$arrayValores = array(140.10, 200, 215.05, 550);

function monetario($valor)
{
    $valor = "R$ " . $valor;
    return $valor;
}

$arrayValores = array_map("monetario", $arrayValores);
print_r($arrayValores);
echo "<br><br>";

$strExemplo = "10;20;30;100;50";
$arrayExemplo1 = explode(";", $strExemplo);
print_r($arrayExemplo1);
echo "<br><br>";

$arrayExemplo1 = implode(";", $arrayExemplo1);
print_r($arrayExemplo1);
echo "<br><br>";

$strExemplo = "chave1=valor1&chave2=valor2&var1=Php";
parse_str($strExemplo, $arrayExemplo2);
print_r($arrayExemplo2);
echo "<br><br>";

$meuArray = array();
print_r($meuArray);
echo "<br><br>";

$meuArray = array("a", "b", "c", "d");
echo $meuArray[1]." ";
echo $meuArray[1+1+1];
echo "<br><br>";

echo array(1, 2, 3) == array(1, 2, 1+2);
echo "<br><br>";

array_unshift($meuArray, "e");
print_r($meuArray);
echo "<br><br>";

?>

</body>
</html>