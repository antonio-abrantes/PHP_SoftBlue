<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php
include("funcoes_bd.php");
/**
 * Created by PhpStorm.
 * User: Tonho
 * Date: 16/04/2017
 * Time: 11:26
 */


$sql = "INSERT INTO USUARIOS (NOME, EMAIL, IDADE) VALUES ('Antonio', 'antonio@hotmail.com', 25);";

$conector = conectar_bd();

mysql_query($sql, $conector);
mysql_close($conector);


$conector = conectar_bd();
mysql_query($sql, $conector);

$rs = mysql_query("SELECT * FROM USUARIOS", $conector);
mysql_close($conector);

listar_usuarios($rs);
?>

</body>
</html>