<?php
ob_start();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<h1>ESTUDO DE COOKIE</h1><hr>

<?php
/**
 * Created by PhpStorm.
 * User: Tonho
 * Date: 24/04/2017
 * Time: 21:47
 */
if(isset($_REQUEST["autenticar"]) && $_REQUEST["autenticar"] == true){
    $hashDaSenha = md5($_POST["senha"]);
    $sql = "SELECT * FROM USUARIOS WHERE EMAIL = '".$_POST["email"]."'";
    //$sql = "SELECT * FROM USUARIOS";

    //Instanciando o objeto PDO
    $conector = new PDO( 'mysql:host=localhost;dbname=wp_workshop', "root", "" );

    $result = $conector->query($sql);

    if($result){

       $linha = $result->fetch(PDO::FETCH_OBJ); //converte a linha de resultado em um objeto
        print_r($linha);
        echo $linha->EMAIL; //Os campos são acessados como atributos

        setcookie("ultimoAcesso", date("d/m/Y"), time() + 30);
        session_start();

        $_SESSION["usuario"] = $linha->NOME;

        header("location: ap_sessao_e_cookies_02.php");

    }else{
        echo "Usuario não cadastrado!";
    }

    }
?>

<form method="post" action="?autenticar=true">
    E-mail: <input type="text" name="email"><br>
    Senha: <input type="password" name="senha">
    <input type="submit" value="ENVIAR">

</form>
</body>
</html>
<?php
ob_flush();
?>