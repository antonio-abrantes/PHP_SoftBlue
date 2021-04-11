<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: Tonho
 * Date: 30/03/2017
 * Time: 19:17
 */

include("exercicios.php");

function insereTexto($var){
    $var = "Texto: ".$var;
    return $var;
}

$arrayExemplo = array("num1" => 5, "num2"=> "A", "num3"=> "SoftBlue");
echo $arrayExemplo["num3"]."<br>";

print_r($arrayExemplo);
echo "<br>";

$elemento = array_pop($arrayExemplo);

print_r($arrayExemplo);
echo "<br>"."Elemtno retirado : ".$elemento."<br>";

array_unshift($arrayExemplo, "Antonio");
print_r($arrayExemplo);
echo "<br>";

$arrayExemplo = array("Antonio", "Php", "Bsoftblue");

$novoArray = array_map("insereTexto", $arrayExemplo);
print_r($novoArray);
echo "<br>";

//echo count($arrayExemplo)."<br>";

//echo array_key_exists("num4", $arrayExemplo);
$chaves = array_search("softblue", $arrayExemplo);
echo $chaves."<br/>";

$result = in_array("Php", $arrayExemplo);
echo $result."<br>";

sort($arrayExemplo);
print_r($arrayExemplo);
echo "<br>";

$str = "Uma frase qualquer para testar";
$meuArray = explode(" ", $str);
print_r($meuArray);
echo "<br>";

$novaStr = implode(" ", $meuArray);
echo $novaStr;
echo "<br>";

echo "Questao 01<br>";
$result = questao01( array(7, 8, 10),array(2, 3, 5) );
echo $result."<br/>";

echo "Questao 02<br>";
$novoArray = questao02(array("a", "b", "c", "d"));
print_r($novoArray);
echo "<br>";

echo "Questao 03<br>";
$result = questao03(array(1, 2, 3));
echo $result."<br/>";

echo "Questao 04<br>";
$novoArray = array(1, 2, 3);
$novoArray = questao04($novoArray, 4);
print_r($novoArray);
echo "<br>";

echo "Questao 05<br>";
$novoArray = questao05($novoArray);
print_r($novoArray);
echo "<br>";

echo "Questao 06<br>";
$result = questao06($novoArray);
echo $result."<br/>";
print_r($novoArray);
echo "<br>";

echo "Questao 07<br>";
$novoArray = array(1, 2, 3);
$novoArray = questao07($novoArray, 4);
print_r($novoArray);

echo "Questao 08<br>";
$novoArray = array("Empresa" => "Softblue", "Nome" => "Andre");
echo "<br>";
echo questao08("Empresa", $novoArray);
echo questao08("Softblue", $novoArray);

?>

</body>
</html>