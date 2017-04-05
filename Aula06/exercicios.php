<?php
/**
 * Created by PhpStorm.
 * User: Tonho
 * Date: 04/04/2017
 * Time: 21:36
 */

function questao04($origem){
    $propriedades = array();

    $arquivo = file($origem);
    for($x=0; $x<count($arquivo); $x++) {
        $chave = substr($arquivo[$x], 0, strpos($arquivo[$x], "="));
        $valor = substr($arquivo[$x], strpos($arquivo[$x], "=") + 1);
        $propriedades[$chave] = $valor;
    }

    return $propriedades;
}

function questao03($str){
    $arquivoDeLog = fopen("log.txt", "a+");

    fwrite($arquivoDeLog, date("d/m/Y H:m:s") . " " . $str . "\r\n");
}

function questao02($diretorio){
    $dir = opendir($diretorio);

    while(false !== ($file = readdir($dir))) {
        echo $file . "<BR>";
    }

    closedir($dir);
}

function questao01($origem, $destino){

    $arquivoOrigem = fopen($origem, "r");
    $arquivoDestino = fopen($destino, "w");

    while($buffer = fread($arquivoOrigem, 2)) {
        fwrite($arquivoDestino, $buffer);
    }

    fclose($arquivoOrigem);
    fclose($arquivoDestino);
}

?>