<?php
/**
 * Created by PhpStorm.
 * User: Tonho
 * Date: 05/04/2017
 * Time: 19:40
 */

//try {
//    $idade = $_POST['IDADE'];
//    $nome = $_POST['NOME'];
//    $email = $_POST['EMAIL'];
//    echo '<br/>NOME: '.$nome;
//    echo '<br/>IDADE: '.$idade;
//    echo '<br/>E-mail: '.$email;
//} catch (Exception $e) {
//    echo 'Exceção capturada: ',  $e->getMessage(), "\n";
//}

if (isset($_POST['nome']) == true){
    $nome = $_POST['nome'];
    echo "Cadastrado com sucesso! Nome: ".$nome;
}else{
    echo "Erro!";
}

?>
