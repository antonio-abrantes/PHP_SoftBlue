<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de dados - Listar</title>
</head>
<body>
<table border=1>
            <TR>
                <TH>Nome</TH>
                <TH>E-mail</TH>
                <TH>Idade</TH>
                <TH>Sexo</TH>
                <TH>Estado Civil</TH>
                <TH>Humanas</TH>
                <TH>Exatas</TH>
                <TH>Biológicas</TH>
                <TH>Hash da senha</TH>
                <TH>Ações</TH>
            </TR>
<?php

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
    
    /**
     * Logica da exclusão de dados
     */
    if(isset($_REQUEST["excluir"]) && $_REQUEST["excluir"] == true)
    {
        $stmt = $connection->prepare("DELETE FROM usuarios WHERE id = ?");
        $stmt->bindParam(1, $_REQUEST["id"]);
        $stmt->execute();
        
        if($stmt->errorCode() != "00000")
        {
            echo "Erro código " . $stmt->errorCode() . ": ";
            echo implode(", ", $stmt->errorInfo());
        }
        else
        {
            echo "Sucesso: usuário removido com sucesso<BR><BR>";
        }
    }
    
    $rs = $connection->prepare("SELECT * FROM usuarios");
    
    if($rs->execute())
    {
        while($registro = $rs->fetch(PDO::FETCH_OBJ))
        {
            echo "<TR>";
            
            echo "<TD>" . $registro->nome . "</TD>";
            echo "<TD>" . $registro->email . "</TD>";
            echo "<TD>" . $registro->idade . "</TD>";
            echo "<TD>" . $registro->sexo . "</TD>";
            echo "<TD>" . $registro->estado_civil . "</TD>";
            echo "<TD>" . $registro->humanas . "</TD>";
            echo "<TD>" . $registro->exatas . "</TD>";
            echo "<TD>" . $registro->biologicas . "</TD>";
            echo "<TD>" . $registro->senha . "</TD>";
            
            echo "<TD>";
            echo "<A href='?excluir=true&id=" . $registro->id . "'>(exclusão)</A>";
            echo "<A href='banco_dados_alterar.php?id=" . $registro->id . "'>(alteração)</A>";
            echo "<A href='banco_dados_senha.php?id=" . $registro->id . "'>(alteração de senha)</A>";
            echo "<TD>";
            
            echo "</TR>";
        }
    }
    else
    {
        echo "Falha na seleção de usuários<BR>";
    }

?>
</table>
<br>
    <A href="./banco_dados_cadastro.php">Criar um novo registro</A>
</body>
</html>