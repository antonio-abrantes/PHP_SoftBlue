<?php
   // ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php
    //header("Location: http://www.google.com.br");
    //ob_flush();
include('funcoes.php');
include ('exercicios.php');
/**
 * Created by PhpStorm.
 * User: Tonho
 * Date: 27/03/2017
 * Time: 20:23
 */

//$num = 2;
//calcularReferencia($num);
//
//echo $num;
//
//calcularValor($num);
//
//echo $num;
//
//calcularReferencia($num);
//
//echo $num;
//
//$num++;
//
//$v = $num % 2 == 0 ? $v = 'PAR' : $v = 'IMPAR';
//
//echo '<br>'.$v.'<br/><br/>';
//
//testeSwith(5);
//testeFor(3);
//testewhile();
////testeGoTo();
//testeSVariaveis();
//$retorno = testeFuncaoComRetorno(5);
//
//echo "<br/>".$retorno;
echo "Questao 01"."<br/>";
questao01();

echo "Questao 02"."<br/>";
questao02();

echo "Questao 03"."<br/>";
questao03();

echo "Questao 04"."<br/>";
echo questao04(4)."<br/>";

echo "Questao 05"."<br/>";
echo questao05(10, 9, 8, 3, 2, 5)."<br/>";

echo "Questao 06"."<br/>";
questao06();

echo "Questao 07"."<br/>";
echo questao07(5, 10)."<br/>";

echo "Questao 08"."<br/>";
questao08(13);

?>

</body>
</html>