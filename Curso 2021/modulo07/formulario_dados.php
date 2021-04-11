<?php

$erro = null;
$valido = false;

if(isset($_REQUEST["validar"]) && $_REQUEST["validar"] == true)
{
    if(strlen(utf8_decode($_POST["nome"])) < 5)
    {
        $erro = "Preencha o campo nome corretamente (5 ou mais caracteres)";
    }
    else if(strlen(utf8_decode($_POST["email"])) < 6)
    {
        $erro = "E-mail inválido, preencha corretamente";
    }
    else if(is_numeric($_POST["idade"]) == false)
    {
        $erro = "Campo idade deve ser numérico";  
    }
    else if($_POST["sexo"] != "M" && $_POST["sexo"] != "F")
    {
        $erro = "Selecione o campo sexo corretamente";
    }
    else if($_POST["estadocivil"] != "Solteiro(a)" &&
            $_POST["estadocivil"] != "Casado(a)" &&
            $_POST["estadocivil"] != "Divorciado(a)" &&
            $_POST["estadocivil"] != "Viúvo(a)")
    {
        $erro = "Selecione o campo de estado civil corretamente";
    }
    else
    {
        $valido = true;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de dados</title>
</head>
<body>

<?php

if ($valido == true) {
    echo "Dados enviados com sucesso!";
} else {

    if (isset($erro)) {
        echo $erro . "<BR><BR>";
    }

    ?>
    <FORM method=POST action="?validar=true">
        Nome:
        <INPUT type=TEXT name=nome
        <?php if (isset($_POST["nome"])) {echo "value='" . $_POST["nome"] . "'";}?>
        ><BR>

        E-mail:
        <INPUT type=TEXT name=email
        <?php if (isset($_POST["email"])) {echo "value='" . $_POST["email"] . "'";}?>
        ><BR>

        Idade:
        <INPUT type=TEXT name=idade
        <?php if (isset($_POST["idade"])) {echo "value='" . $_POST["idade"] . "'";}?>
        ><BR>

        Sexo:
        <INPUT type=RADIO name=sexo value="M"
        <?php if (isset($_POST["sexo"]) && $_POST["sexo"] == "M") {echo "checked";}?>
        >Masculino

        <INPUT type=RADIO name=sexo value="F"
        <?php if (isset($_POST["sexo"]) && $_POST["sexo"] == "F") {echo "checked";}?>
        >Feminino
        <BR>

        Interesses:
        <INPUT type=CHECKBOX name="humanas"
        <?php if (isset($_POST["humanas"])) {echo "checked";}?>
        >Ciências Humanas

        <INPUT type=CHECKBOX name="exatas"
        <?php if (isset($_POST["exatas"])) {echo "checked";}?>
        >Ciências Exatas

        <INPUT type=CHECKBOX name="biologicas"
        <?php if (isset($_POST["biologicas"])) {echo "checked";}?>
        >Ciências Biológicas
        <BR>

        Estado civil:
        <SELECT name="estadocivil">
            <OPTION>Selecione...</OPTION>

            <OPTION
            <?php
if (isset($_POST["estadocivil"]) && $_POST["estadocivil"] == "Solteiro(a)") {echo "selected";}
    ?>
            >Solteiro(a)</OPTION>

            <OPTION
            <?php
if (isset($_POST["estadocivil"]) && $_POST["estadocivil"] == "Casado(a)") {echo "selected";}
    ?>
            >Casado(a)</OPTION>

            <OPTION
            <?php
if (isset($_POST["estadocivil"]) && $_POST["estadocivil"] == "Divorciado(a)") {echo "selected";}
    ?>
            >Divorciado(a)</OPTION>

            <OPTION
            <?php
if (isset($_POST["estadocivil"]) && $_POST["estadocivil"] == "Viúvo(a)") {echo "selected";}
    ?>
            >Viúvo(a)</OPTION>
        </SELECT>
        <BR>

        Senha:
        <INPUT type=PASSWORD name="senha"><BR>
        <INPUT type=SUBMIT value="Enviar">

    </FORM>
    <?php
}
?>

</body>
</html>