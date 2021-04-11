<?php
/**
 * Created by PhpStorm.
 * User: Tonho
 * Date: 31/03/2017
 * Time: 21:10
 */

function questao08($chaveBusca, $array) {
    $chaves = array_keys($array);

    foreach($chaves as $chave) {
        if($chave == $chaveBusca) {
            return TRUE;
        }
    }
    return FALSE;
}

function questao07($array, $elemento) {

    for ($x = sizeof($array); $x > 0; $x--) {
        $array[$x] = $array[$x - 1];
    }
    $array[0] = $elemento;
    return $array;
}

function questao06(&$array) {
    $elemento = $array[0];
    unset($array[0]);
    //print_r($array);
    return $elemento;
}

function questao05($array) {
    $elemento = $array[sizeof($array) - 1];
    unset($array[sizeof($array) - 1]);
    echo "Elemento ".$elemento." retirado<br/>";
    return $array;
}

function questao04($array, $elemento) {
    $array[sizeof($array)] = $elemento;
    return $array;
}

function questao03($array) {
    $x = 0;
    foreach($array as $posicao) {
        $x++;
    }
    return $x;
}

function questao02($array) {
    $novoArray = array();

    for($x = sizeof($array) - 1; $x >= 0; $x-- ) {
        $novoArray[sizeof($array) - 1 - $x] = $array[$x];
    }
    return $novoArray;
}

function questao01($arrayNotas, $arrayPesos){
    $result = 0;
    for($i = 0; $i < count($arrayNotas); $i++){
        $result = ($arrayNotas[$i] * $arrayPesos[$i]) + $result;
    }

    return $result / 10;
}

?>