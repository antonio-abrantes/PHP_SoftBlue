<?php

    /**
     * Request ex: http://localhost:8000/ws_validacao.php?numero=x
     */

    header("content-type: text/xml");

    $numero = $_REQUEST["numero"];

    if ($numero % 2 == 0) {
        $informacao = "PAR";
    } else {
        $informacao = "ÍMPAR";
    }

    $dom = new DOMDocument("1.0", "UTF-8");
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;

    $elementoInformacao = $dom->createElement("informacao", $informacao);
    $elementoRoot = $dom->createElement("resposta");
    $elementoRoot->appendChild($elementoInformacao);
    $dom->appendChild($elementoRoot);
    echo $dom->saveXML();
