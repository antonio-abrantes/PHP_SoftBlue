<?php

    /**
     * Request ex: http://localhost:8000/ws_banco_dados.php?email=antonio@hotmail.com.br
     */

    header("content-type: text/xml;");
    
    $dom = new DOMDocument("1.0", "UTF-8");
    $dom->preserveWhiteSpace = FALSE;
    $dom->formatOutput = TRUE;
    
    $elementoRoot = $dom->createElement("dados");
    
    if(!isset($_REQUEST["email"]))
    {
        $elementoErro = $dom->createElement("erro", "Parâmetro 'email' não informado.");
        $elementoRoot->appendChild($elementoErro);
        
        $dom->appendChild($elementoRoot);
        echo $dom->saveXML();
        exit();
    }
    
    try
    {
        $connection = new PDO("mysql:host=localhost;dbname=cursophp", "root", "");
        $connection->exec("set names utf8");
    }
    catch(PDOException $e)
    {
        $elementoErro = $dom->createElement("erro", "Falha na conexão com obanco de dados");
        $elementoRoot->appendChild($elementoErro);
        
        $dom->appendChild($elementoRoot);
        echo $dom->saveXML();
        exit();
    }
    
    $rs = $connection->prepare("SELECT nome, sexo FROM usuarios WHERE email = ?");
    $rs->bindParam(1, $_REQUEST["email"]);

    if($rs->execute())
    {
        if($registro = $rs->fetch(PDO::FETCH_OBJ))
        {
            $elementoNome = $dom->createElement("nome", $registro->nome);
            $elementoSexo = $dom->createElement("sexo", $registro->sexo);
            $elementoUsuario = $dom->createElement("usuario");
            
            $elementoUsuario->appendChild($elementoNome);
            $elementoUsuario->appendChild($elementoSexo);
            $elementoRoot->appendChild($elementoUsuario);
        }
        else
        {
            $elementoErro = $dom->createElement("erro", "Usuário inexistente");
            $elementoRoot->appendChild($elementoErro);
        }
    }
    else
    {
        $elementoErro = $dom->createElement("erro", "Falha na execução do SQL");
        $elementoRoot->appendChild($elementoErro);
    }
    
    $dom->appendChild($elementoRoot);
    echo $dom->saveXML();
    exit();

?>