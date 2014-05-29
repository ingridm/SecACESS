<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css">
</HEAD>

<BODY>
<div id = "cabecalho"></div><!--cabecalho -->
<?php
include 'db.php';
   
$id = $_POST['id_Usuario'];
$nome = $_POST['nome'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$foto = $_POST['foto'];
$moradia = $_POST['moradia'];
$status = $_POST['status'];

$consulta = "UPDATE usuario SET nome = '$nome', rg = '$rg', cpf = '$cpf', telefone = $telefone, email = $email, foto = $foto, moradia = $moradia, status = $status, WHERE id 
= '$id_Usuario'";
$resultado = mysql_query($consulta)
   or die("Falha na execucao da consulta");
echo "Cadastro atualizado"; 

mysql_close($conexao);
?>

</BODY>
</HTML>