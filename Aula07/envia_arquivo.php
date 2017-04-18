<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php
    if(isset($_REQUEST["envio"]) && $_REQUEST["envio"] == true){
        if(isset($_FILES["campoArquivo"])){
            $arquivoNome = $_FILES["campoArquivo"]["name"];
            $arquivoTipo = $_FILES["campoArquivo"]["type"];
            $arquivoTamanho = $_FILES["campoArquivo"]["size"];
            $nomeTempoario = $_FILES["campoArquivo"]["tmp_name"];
            $erro = $_FILES["campoArquivo"]["error"];

            if($erro == 0){
                if(is_uploaded_file($nomeTempoario)){
                    if(move_uploaded_file($nomeTempoario, "uploads/".$arquivoNome)){
                        echo "Arquivo enviado com susesso!<br/>";

                        echo "Nome original: ".$arquivoNome."<br/>";
                        echo "Nome temporario: ".$nomeTempoario."<br/>";
                        echo "Tipo: ".$arquivoTipo."<br/>";
                        echo "Tamanho: ".$arquivoTamanho."<br/>";

                    }
                }
            }
        }else{
            echo "Arquivo nao selecionado!";
        }
    }

?>

<form enctype="multipart/form-data" method=POST action="envia_arquivo.php?envio=true">
    <input name="campoArquivo" type=FILE>
    <br/><input type="submit">
</form>

</body>
</html>