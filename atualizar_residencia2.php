<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css">
</HEAD>

<BODY>
<div id = "cabecalho"></div><!--cabecalho -->
<?php
include 'db.php';
   
$id_Residencia = $_POST['id_Residencia'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$andar = $_POST['andar'];
$status = $_POST['status'];
$morador_Titular = $_POST['morador_Titular'];
$moradores = $_POST['moradores'] //tem que pegar do cadastro de usuários
$telefone = $_POST['telefone'];

$consulta = "UPDATE residencia SET rua = '$rua', numero = '$numero', andar = '$andar', status = $status, morador_Titular = $morador_Titular, moradores = $moradores, telefone = $telefone, WHERE id = '$id_Residencia";
$resultado = mysql_query($consulta)
   or die("Falha na execucao da consulta");
echo "Cadastro atualizado"; 

mysql_close($conexao);
?>

</BODY>
</HTML>