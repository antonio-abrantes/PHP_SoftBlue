<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php
include("exercicios.php");
/**
 * Created by PhpStorm.
 * User: Tonho
 * Date: 29/03/2017
 * Time: 23:17
 */
$str = "PHP eh naP SoftBlueP";

    if(strcmp("Antonio", "PHP") == 0){
        echo "True";
    }else{
        echo "False";
    }
    echo "<br/>";

    $x = strpos($str, "P");
    while($x !== false){
        echo $x." ";
        $x = strpos($str, "P", $x+1);
    }

    print "<br>"."<br>".$str[0];
    echo "<br>".strlen($str);

$s = str_replace('na', 'com a', $str);

echo '<br/>'.$s;

echo '<br/>'.strtolower($str);

echo '<br/>'.strtoupper($str);

echo '<br/>'.strrev($str);

echo '<br/>'.crypt("Antonio Abrantes", 727);
echo '<br/>'.sha1($str);

echo '<br/>'.md5($str).'<br/>'.'<br/>';

$str = "exemplo de string para ser capitalizada";
$str = "Antonio";

echo "Questao 01"."<br/>";
questao01($str);

echo "Questao 02"."<br/>";
questao02("Exemplo de string");

echo "Questao 03"."<br/>";
$result = questao03("Exemplo de string", "s");
if($result == false){
    echo "Caracter nao localizado";
}else{
    echo $result;
}
echo "<br/>"."Questao 04"."<br/>";
$result = questao04("Exemplo de string de teste", "de");
echo $result;

?>

</body>
</html>
