<?php
/**
 * Created by PhpStorm.
 * User: Tonho
 * Date: 16/04/2017
 * Time: 17:14
 */

function conectar_bd(){
    $conector = mysql_connect("localhost", "root", "");
    mysql_select_db("wp_workshop", $conector);

    return $conector;
}

function listar_usuarios($rs){
    echo "<table border='2'  cellspacing='2' cellpadding='5' >";

    while($registro = mysql_fetch_array($rs)){
        echo "<tr>";
        echo "<td>".$registro["ID"]."</td>";
        echo "<td>".$registro["NOME"]."</td>";
        echo "<td>".$registro["EMAIL"]."</td>";
        echo "<td>".$registro["IDADE"]."</td>";
        echo "<td><a href='excluir_itens.php?excluir=true&id=".$registro["ID"]."'>EXCLUIR</a></td>";
        echo "</tr>";
    }
    echo "</table>";
}

?>