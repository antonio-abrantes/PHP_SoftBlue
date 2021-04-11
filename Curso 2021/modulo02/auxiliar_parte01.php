
<?php

$texto = "Arquivo auxiliar carregado...<br>";
echo $texto;

function teste01()
{
    echo "Função teste01 executada com sucesso.<br>";
}

function funcaoDobro($valor): int
{
    return $valor * 2;
}

echo "<br>";

// for($x=0; $x<10; $x++) {
//     $y = $x;
//     if($x == 9)
//        break;
// }

// echo $x;

// echo "Teste";

// if($x == 2) { /*1*/ }
// else if ($x == 3) { /*2*/ }
// else { /*3*/ }

// switch($x)
//     {
//         case 2: /*1*/ break;
//         case 3: /*2*/ break;
//         default: /*3*/ break;
//     }

// $x = 1;
// while(++$x < 10) { /*bloco*/ }

// do {
//     /*bloco*/
// }
// while(++$x < 10)

// $x = 0;
// while($x++ < 9)
// { /*bloco*/
//     echo "resultado<br>";
// }

$x = 3;
if ($x++ == 6 || $x++ == 5 || $x++ == 4) {
    $x = $x;
} else {
    $x = $x + $x++;
}
echo "<br>";
echo $x;

$x = 3;

if ($x++ > 0 && $x++ < 5) {
    $x = $x + 1;
} else {
    $x = $x - 1;
}
echo $x;
