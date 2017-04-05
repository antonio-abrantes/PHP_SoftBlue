<?php
/**
 * Created by PhpStorm.
 * User: Tonho
 * Date: 03/04/2017
 * Time: 20:34
 */

function questao01($dataBr){

    $ano = substr($dataBr, 6, 4);
    $mes = substr($dataBr, 3, 2);
    $dia = substr($dataBr, 0, 2);

    return $ano . "-" . $mes . "-" . $dia . substr($dataBr, 10);
}

function questao02($dataUs){
    $ano = substr($dataUs, 0, 4);
    $mes = substr($dataUs, 5, 2);
    $dia = substr($dataUs, 8, 2);

    return $dia . "/" . $mes . "/" . $ano . substr($dataUs, 10);
}

function questao03($data){

    $ano = substr($data, 0, 4);
    $mes = substr($data, 5, 2);
    $dia = substr($data, 8, 2);

    $hora = substr($data, 11, 2);
    $minuto = substr($data, 14, 2);
    $segundo = substr($data, 17, 2);

    return array($ano, $mes, $dia, $hora, $minuto, $segundo);
}

function questao04($data1, $data2, $formato){

    if($formato) {
        $data1 = questao01($data1);
        $data2 = questao01($data2);
    }

    $split1 = questao03($data1);
    $split2 = questao03($data2);

    $time1 = mktime($split1[3], $split1[4], $split1[5], $split1[1], $split1[2], $split1[0]);
    $time2 = mktime($split2[3], $split2[4], $split2[5], $split2[1], $split2[2], $split2[0]);

    $diferenca = $time2 - $time1;

    $dia = round($diferenca/(24*60*60));
    $diferenca = $diferenca % (24*60*60);

    $hora = round($diferenca/(60*60));
    $diferenca = $diferenca % (60*60);

    $minuto = round($diferenca/(60));
    $segundo = $diferenca % (60);

    echo "A diferenca eh de ".$dia." dias, ".$hora." horas, ".$minuto." minutos e ".$segundo." segundos.";
}

function questao05($dataUs){
    $split = questao03($dataUs);
    return checkdate($split[1], $split[2], $split[0]);
}

?>