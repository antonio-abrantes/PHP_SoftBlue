<?php
/**
 * Created by PhpStorm.
 * User: Tonho
 * Date: 16/04/2017
 * Time: 16:49
 */
include("funcoes_bd.php");


if(isset($_REQUEST["excluir"]) && $_REQUEST["excluir"] = true){
    $sql = "DELETE FROM USUARIOS WHERE ID = ".$_REQUEST["id"];

    $conector = conectar_bd();
    $rs = mysql_query($sql, $conector);

    $rs = mysql_query("SELECT * FROM USUARIOS", $conector);

   listar_usuarios($rs);
    mysql_close($conector);

}

?>