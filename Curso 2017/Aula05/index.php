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
 * Date: 03/04/2017
 * Time: 19:20
 */
include("exercicios.php");

$agora = time();

echo $agora."<br/><br/>";

echo date("d/m/Y")."<br/>";
echo date("c")."<br/>";

$depois = strtotime("+2 day", $agora);
echo strtotime("+2 day", time())."<br/>";

echo ($depois - $agora) / 60 / 60 / 24;
echo "<br/>Exercicios:<br/>";


echo questao01("31/12/2010 12:00:00");
echo "<br/><br/>";

echo questao02("2010-12-31 12:00:00");
echo "<br/><br/>";

print_r(questao03("2010-12-31 12:00:00"));
echo "<br/><br/>";

questao04("20/12/2010 12:00:00","23/12/2010 14:05:17", true );
echo "<br/><br/>";

$result = questao05("2010-02-31"); //questao05("2010-12-31");
if ($result == 1)
    echo "Verdadeiro";
else
    echo "Falso";

?>

</body>
</html>