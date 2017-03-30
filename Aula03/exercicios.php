<?php
/**
 * Created by PhpStorm.
 * User: Tonho
 * Date: 29/03/2017
 * Time: 20:44
 */

function questao04($str, $busca) {

    $x = strpos($str, $busca);

    if($x !== false) {
        return substr($str, $x);
    }
    else {
        return false;
    }
}

function questao03($str, $caracter){
    $i = 0;
    for($i; $i < strlen($str); $i++){
//        if($str[$i] == $caracter ){
//            echo $i;
//            break;
//        }
        if(strcmp($str[$i], $caracter) == 0){
            break;
        }
    }
    if($i == strlen($str)){
        return false;
    }else{
        return $i;
    }
}

function questao02($str){
    $temp = "";
    for($i = strlen($str)-1; $i >= 0; $i--){
        $temp = $temp.$str[$i];
    }
    echo $temp."<br/>";
}

function questao01($str){
    $temp = ucfirst($str);
    $p = strpos($temp, " ");
    $frase = substr($temp, 0, $p);
    $temp = substr($temp, $p, strlen($temp));
    $temp = ltrim($temp);

    while($p !== false){
        $temp = ucfirst($temp);
        $p = strpos($temp, " ");
        $frase = $frase." ".substr($temp, 0, $p);
        $temp = substr($temp, $p, strlen($temp));
        $temp = ltrim($temp);
    }

    $resultado = $frase.$temp;
    //echo str_replace(" ", "_", $resultado);
    echo rtrim($resultado)."<br/>";
}

?>