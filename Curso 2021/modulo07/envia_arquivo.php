<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de arquivos</title>
    <style>
        input{
            margin: 10px;
        }
    </style>
</head>
<body>

<?php

echo $_REQUEST["texto"]."<br>";

if (isset($_REQUEST["envio"]) && $_REQUEST["envio"] == "true") {
    // $erro = 0;

    if (isset($_FILES["campoArquivo"])) {
        $arquivoNome = $_FILES["campoArquivo"]["name"];
        $arquivoTipo = $_FILES["campoArquivo"]["type"];
        $arquivoTamanho = $_FILES["campoArquivo"]["size"];
        $arquivoNomeTemp = $_FILES["campoArquivo"]["tmp_name"];
        $erro = $_FILES["campoArquivo"]["error"];

        if ($erro == 0) {
            if (is_uploaded_file($arquivoNomeTemp)) {
                if (move_uploaded_file($arquivoNomeTemp, "uploads/" . $arquivoNome)) {
                    echo "Sucesso! <BR>";

                    echo "Nome original..: " . $arquivoNome . "<BR>";
                    echo "Tipo...........: " . $arquivoTipo . "<BR>";
                    echo "Tamanho........: " . $arquivoTamanho . "<BR>";
                    echo "Nome temporário: " . $arquivoNomeTemp . "<BR>";
                } else {
                    $erro = "Falha ao mover o arquivo (permissão de acesso, caminho inválido)";
                }
            } else {
                $erro = "Erro no envio: arquivo não recebido com sucesso.";
            }
        } else {
            $erro = "Erro no envio: " . $erro;
        }
    } else {
        $erro = "Arquivo enviado não encontrado.";
    }

    if ($erro !== 0) {
        echo $erro;
    }
}
?>


<form enctype="multipart/form-data" action="./envia_arquivo.php?envio=true" method="post">
    <input type="text" name="texto">
    <input type="file" name="campoArquivo"><br>
    <input type="submit" value="Enviar">
</form>

</body>
</html>
