<?php
$conexao = mysql_connect("localhost", "root", "")
   or die("Foi possivel conectar");
mysql_select_db("secacess", $conexao)
   or die("Não foi possivel conectar com o banco de dados");
?>