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

        $sql = "SELECT NOME FROM USUARIOS WHERE EMAIL = '".$_POST["email"]."'";
        //$sql = "SELECT * FROM USUARIOS WHERE ID = 28";

        include("funcoes_bd.php");  // Usando as funçoes Mysql
        $conector = conectar_bd();
       $rs = mysql_query($sql, $conector);


        if($registro = mysql_fetch_array($rs)){
            setcookie("ultimoAcesso", date("d/m/Y"), time() + 30);

            session_start();
            $_SESSION["usuario"] = $registro["NOME"];

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