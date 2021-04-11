<?php

$erro = null;
$valido = false;

try
{
    $connection = new PDO("mysql:host=localhost;dbname=cursophp", "root", "");
    $connection->exec("set names utf8");
}
catch(PDOException $e)
{
    echo "Falha: " . $e->getMessage();
    exit();
}

if(isset($_REQUEST["validar"]) && $_REQUEST["validar"] == true)
{
    if($_POST["senha"] != $_POST["senhaRepete"])
    {
        $erro = "Senhas digitadas diferentes";
        $erro .= "<BR><A href='?id=".$_POST["id"]."'>Tentar novamente</A>";
        echo $erro;
        exit();
    }
    else
    {
        $valido = true;

        $sql = "UPDATE usuarios SET
                senha = ?
                WHERE id = ?";
                
        $stmt = $connection->prepare($sql);
        
        $passwordHash = md5($_POST["senha"]);
        $stmt->bindParam(1, $passwordHash);
        $stmt->bindParam(2, $_POST["id"]);
        
        $stmt->execute();
        
        if($stmt->errorCode() != "00000")
        {
            $valido = false;
            $erro = "Erro código " . $stmt->errorCode() . ": ";
            $erro .= implode(", ", $stmt->errorInfo());
        }
    }
}
else
{
    $rs = $connection->prepare("SELECT nome, email FROM usuarios WHERE id = ?");
    $rs->bindParam(1, $_REQUEST["id"]);
    
    if($rs->execute())
    {
        if($registro = $rs->fetch(PDO::FETCH_OBJ))
        {
            $_POST["nome"] = $registro->nome;
            $_POST["email"] = $registro->email;
        }
        else
        {
            $erro = "Registro não encontrado";
        }
    }
    else
    {
        $erro = "Falha na captura do registro";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de dodos - Alterar senha</title>
</head>
<body>
<?php
        
    if($valido == true)
    {
        echo "Senha alterada com sucesso!";
        echo "<BR><BR>";
        echo "<A href='banco_dados_listar.php'>Visualizar registros</A>";
    }
    else
    {

        if(isset($erro))
        {
            echo $erro . "<BR><BR>";
        }
        
        ?>
        <FORM method=POST action="?validar=true">

            Nova senha para o usuário
            <?php
                echo $_POST["nome"];
                echo " (".$_POST["email"].")";
                echo "<BR>";
            ?>
            
            <BR>
            Digite a senha:
            <INPUT type=PASSWORD name=senha><BR>
            
            <BR>
            Digite a senha novamente:
            <INPUT type=PASSWORD name=senhaRepete><BR>
            
            <INPUT type=HIDDEN name=id
                   value="<?php echo $_REQUEST["id"]; ?>"
            >
                
            <INPUT type=SUBMIT value="Alterar">

        </FORM>
        <?php
            }
        ?>
</body>
</html>