<?php
$conexao = mysql_connect("localhost", "root", "", "db_produtos");
if(!$conexao){
    die("Erro: " . mysqli_connect_error());
}
?>