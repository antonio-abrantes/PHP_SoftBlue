<?php
/**
 * Created by PhpStorm.
 * User: Tonho
 * Date: 27/03/2017
 * Time: 21:14
 */
function calcularReferencia(&$num){
    $num++;
}

function calcularValor($num){
    $num++;
}

function testeFuncaoComRetorno($valor){
    $valor = $valor * 2;
    return $valor;
}

function testeSVariaveis(){
    echo "<br/>";
    echo $_SERVER["SERVER_ADDR"].'<br/>';
    echo $_SERVER["HTTP_ACCEPT_ENCODING"].'<br/>';
    echo $_SERVER["SERVER_NAME"].'<br/>';
}

function testeGoTo(){
    $i = 0;
    saindo:
    echo "<br/>Iniciando";
    $i++;
    echo "<br/>Executando";

    echo "<br/>Finalizando";
    if($i < 5){
        goto saindo;
    }
}

function testewhile(){
    echo "<br/>";
    $i = 0;
    while($i < 5){
        echo $i." ";
        $i++;
    }
}

function testeFor($i){
    for($i; $i < 10; $i++){
        echo "<br/>Loop ".$i;
        if($i == 5){
            echo "<br/>Break";
            break;
        }
    }
}

function testeSwith($i){
    switch($i){
        case 0:
            echo "ZERO";
            break;
        case 1:
            echo "UM";
            break;
        case 2:
            echo "DOIS";
            break;
        default:
            echo "Nenhum dos numeros do teste!";
            break;
    }
}

?>