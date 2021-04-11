<?php
/**
 * Created by PhpStorm.
 * User: Tonho
 * Date: 28/03/2017
 * Time: 20:29
 */

function questao08($x){
    while($x > 0){
        $x = auxQuestao08($x);
        if($x == 1){
            echo $x.".";
            break;
        }else{
            echo $x." ? ";
        }
    }
}

function auxQuestao08($x){
    if($x % 2 == 0){
        $y = $x / 2;
    }else{
        $y = 3 * $x + 1;
    }
    return $y;
}

function questao07($inicio, $final){
    $soma = 0;
    for($i = $inicio; $i <= $final; $i++){
        $soma += $i;
    }
    return $soma;
}

function questao06(){
    $qtd = 100;
    $x = 0;
    $y = 1;
    echo $x.", ".$y.", ";
    for($i = 2; $i < $qtd; $i++){
        $aux = $y;
        $y = $x + $aux;
        $x = $aux;
        if($y >= 110)
            break;
        if($i < $qtd - 1){
            echo $y.", ";
        }else{
            echo $y;
        }
    }
    echo "<br/>";
}


function questao05($n1, $n2, $n3, $p1, $p2, $p3){
    $media = ($n1 * $p1 + $n2 * $p2 + $n3 * $p3) / 10;
    return $media;
}

function questao01(){
    $i = 1;
    for($i ; $i <= 100; $i++){
        echo $i."<br/>";
    }
}

function questao02(){
    $i = 1;
    while($i <= 100){
        if($i % 3 == 0)
            echo $i."<br/>";
        $i++;
    }
}

function questao03(){
    $i = 50;
    $soma = 0;
    while($i <= 100){

        if($i % 2 == 0){
            $soma += $i;
        }

        $i++;
    }
    echo "Resultado: ".$soma."<br/>";
}

function questao04($num){
    for($fat = 1; $num > 1; $num-- ){
        $fat = $fat * $num;
    }

    return $fat;
}

?>