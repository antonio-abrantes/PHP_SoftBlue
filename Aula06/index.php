<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: Tonho
 * Date: 04/04/2017
 * Time: 20:20
 */

include('exercicios.php');

$caminho = 'Arquivo.txt';

if (is_file($caminho)){
    $tamanho = filesize($caminho);
    echo 'O Arquivo existe e seu tamanho eh '.$tamanho.' bytes<br/>';
}else{
    echo 'O Arquivo nao existe!!';
}

$arquivo = fopen($caminho, 'a+');
$buffer = fread($arquivo, $tamanho);

echo $buffer.'<br/><br/>';
fclose($arquivo);

$arquivo = file($caminho);

lerConteudo($arquivo);

//mkdir = Criar diretorios
//rmdir = Excluir diretorio

//$arquivo = fopen($caminho, 'a+'); //ponteiro vai para o fim do arquivo
$arquivo = fopen($caminho, 'w+');

fwrite($arquivo, 'Mais um nome');
fwrite($arquivo, '\r\nOutro nome para finzalizar');
fclose($arquivo);
$arquivo = file($caminho);

lerConteudo($arquivo);

mkdir('Pasta01', 0777);
rmdir('Pasta01');

function lerConteudo($arquivo){
    foreach ($arquivo as $key){
        echo $key.'<br/>';
    }
}

echo '<br/><br/>Exercicios<br/>';
echo questao01($caminho, 'Copia.txt');
echo '<br/><br/>';

questao02('C:/Intel');
echo '<br/><br/>';

questao03('Teste conexao PHP');
echo '<br/><br/>';

print_r(questao04($caminho));


?>

</body>
</html>
