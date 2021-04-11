<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
  echo $_GET["nome"]." ";
  echo $_POST["nome"]." ";
  echo $_REQUEST["nome"];
?>

    
<FORM action="teste.php?nome=andre" method=GET>
<INPUT name=nome value="milani">
<INPUT type=SUBMIT value="Enviar">
<FORM>





</body>
</html>