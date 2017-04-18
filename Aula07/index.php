<?php
/**
 * Created by PhpStorm.
 * User: Tonho
 * Date: 05/04/2017
 * Time: 19:12
 */
$error = null;
$validado = false;

if (isset($_REQUEST["validar"]) && $_REQUEST["validar"] == true){
    if(strlen($_POST['NOME']) < 5){
        $error = 'Preencha o nome corretamente';
    }else if(strlen($_POST['EMAIL']) < 5){
        $error = 'Preencha o e-mail corretamente';
    }else if(!is_numeric($_POST['IDADE'])){
        $error = 'Preencha a idade corretamente';
    }else if($_POST['SEXO'] != "M" && $_POST['SEXO'] != "F"){
        $error = 'Preencha o sexo';
    }else if($_POST['SEXO'] != "M" && $_POST['SEXO'] != "F"){
        $error = 'Preencha o sexo';
    }else if($_POST['estadocivil'] != "Solteiro(a)" &&
        $_POST['estadocivil'] != "Casado(a)" &&
        $_POST['estadocivil'] != "Divorciado(a)" &&
        $_POST['estadocivil'] != "Viuvo(a)"){
        $error = 'Preencha o estado civil corretamente';
    }else if(strlen($_POST['senha']) < 4) {
        $error = 'Preencha a senha corretamente';
    }else {
        $validado = true;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formularios e Sados</title>
</head>
<body>
<?php
if (!$validado){
    if(isset($error)){
        echo $error.'<br><br>';
    }
}
?>

<script language="JavaScript">

    function validaFormulario(){
        if(document.forms['registro'].NOME.value == ""){
            alert('Preecnah o campo nome.');
            return;
        }else if(document.forms['registro'].EMAIL.value == ""){
            alert('Preecnah o campo E-mail.');
            return;
        }else if(document.forms['registro'].IDADE.value == ""){
            alert('Preecnah o campo idade.');
            return;
        }else if(document.forms['registro'].estadocivil.selectedIndex == 0){
            alert('Escolha o estado civil.');
            return;
        }else if(document.forms['registro'].senha.value == ""){
            alert('Preencha o campo senha.')
            return;
        }else{
            document.forms['registro'].submit();
        }
    }


</script>

<form method="post"  name="registro" action="?validar=true" onsubmit="validaFormulario(); return false">
    Nome: <input type="text" name="NOME"
            <?php if(isset($_POST["NOME"])){
                echo "value='".$_POST['NOME']."'";
            }?>
        ><br/>
    E-mail: <input type="text" name="EMAIL"
        <?php if(isset($_POST["EMAIL"])){
            echo "value='".$_POST['EMAIL']."'";
        }?>
        ><br/>
    Idade: <input type="text" name="IDADE"
        <?php if(isset($_POST["IDADE"])){
            echo "value='".$_POST['IDADE']."'";
        }?>
        ><br/>
    Sexo: <input type="radio" name="SEXO" value="M"
        <?php if(isset($_POST["SEXO"]) && $_POST["SEXO"] == 'M' || !isset($_POST["SEXO"])){
            echo "checked";
        }?>
        >MASCULINO
            <input type="radio" name="SEXO" value="F"
                <?php if(isset($_POST["SEXO"]) && $_POST["SEXO"] == 'F'){
                echo "checked";
            }?>>FEMININO

    <br/>
    Interesses:
    <input type="checkbox" name="HUMANAS"
        <?php if(isset($_POST["HUMANAS"])){ echo "checked"; }?>
        > Ciencias Humanas
    <input type="checkbox" name="EXATAS"
        <?php if(isset($_POST["EXATAS"])){ echo "checked"; }?>
        > Ciencias Exatas
    <input type="checkbox" name="BIOLOGICAS"
        <?php if(isset($_POST["BIOLOGICAS"])){ echo "checked"; }?>
        > Ciencias Biologicas
    <br/>
    Estado Civil:
    <select name="estadocivil">
        <option>Selecione</option>
        <option
            <?php if(isset($_POST["estadocivil"]) && $_POST["estadocivil"] == 'Solteiro(a)'){ echo "selected"; }?>
            >Solteiro(a)</option>
        <option
            <?php if(isset($_POST["estadocivil"]) && $_POST["estadocivil"] == 'Casado(a)'){ echo "selected"; }?>
            >Casado(a)</option>
        <option
            <?php if(isset($_POST["estadocivil"]) && $_POST["estadocivil"] == 'Divorciado(a)'){ echo "selected"; }?>
            >Divorciado(a)</option>
        <option
            <?php if(isset($_POST["estadocivil"]) && $_POST["estadocivil"] == 'Viuvo(a)'){ echo "selected"; }?>
            >Viuvo(a)</option>
    </select><br/>
    Senha: <input type="password" name="senha">
    <br/>
    <input type="RESET" value="Limpar" >
    <input type="SUBMIT" value="Enviar">

</form>

<?php
    if($validado){
        echo "<br>Dados cadastrados com sucesso!<br><br>";
        echo "Nome: ".$_POST["NOME"];
    }

?>

</body>
</html>