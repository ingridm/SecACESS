<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css">
</HEAD>

<BODY>
<div id = "cabecalho"></div><!--cabecalho -->
<?php
include 'db.php'

$consultar = "SELECT * FROM `usuario` WHERE `usuario_Nivel` ='morador'";
$res = mysql_query($consultar);
//$sql = "DELETE FROM usuario WHERE nome='id_Usuario'"; 
//$res = mysql_query($conn, "$sql");
echo "<HR> <BR>";
echo "<h1>Atualizar Usuário<h1>"; 
echo "<TABLE border=2>";
echo "<TH>ID<TH>NOME<TH>RG<TH>CPF<th>TELEFONE<th>E-MAIL<th>MORADIA<th>STATUS</TH>";
while ($dados = mysql_fetch_array($res)) {
	$id = $dados['id_Usuario'];
	echo "<TR>";
	echo "<TD>{$dados['id_Usuario']}";
	echo "<TD>{$dados['nome']}";
	echo "<TD>{$dados['rg']}";
	echo "<TD>{$dados['cpf']}";
	echo "<TD>{$dados['telefone']}";
	echo "<TD>{$dados['email']}";
	echo "<TD>{$dados['foto']}";
	echo "<TD>{$dados['moradia']}";
	echo "<TD>{$dados['status']}";
	echo "<TD> <A href='atualizar_usuario1.php?id=$id'> Atualizar </A><BR>";
	};
$consultavist = ("SELECT * FROM usuario WHERE usuario_Nivel = 'visitante'") or die(mysql_error());
$res = mysql_query($consultavist);	
	//se for visitante
	echo "<TABLE border=2>";
	echo "<TH>ID<TH>NOME<TH>RG</TH>";
while ($dados = mysql_fetch_array($res)) {
	$id = $dados['id_Usuario'];
	echo "<TR>";
	echo "<TD>{$dados['id_Usuario']}";
	echo "<TD>{$dados['nome']}";
	echo "<TD>{$dados['rg']}";
	echo "<TD> <A href='atualizar_usuario1.php?id=$id'> Atualizar </A><BR>";
	echo "</TR>";
};
echo "</TABLE>";
mysql_close($conexao);

?>
</BODY>
</HTML>