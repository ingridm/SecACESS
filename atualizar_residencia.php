<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css">
</HEAD>

<BODY>
<div id = "cabecalho"></div><!--cabecalho -->
<?php
include 'db.php';

$consulta = "select * FROM residencia";
$res = mysql_query($consulta);

//$sql = "DELETE FROM residencia WHERE nome='id_Usuario'"; 
//$res = mysql_query($conn, "$sql");

echo "<HR> <BR>";
echo "<h1>Atualizar Residência<h1>"; 
	if(residencia_Nivel == casa) //se for casa
echo "<TABLE border=2>";
echo "<TH>ID<TH>RUA<TH>Nº<TH>STATUS<th>MORADOR TITULAR<th>MORADORES<TH>Telefone</TH>";
while ($dados = mysql_fetch_array($res)) {
	$id = $dados['id_Residencia'];
	echo "<TR>";
	echo "<TD>{$dados['id_Residencia']}";
	echo "<TD>{$dados['rua']}";
	echo "<TD>{$dados['numero']}";
	echo "<TD>{$dados['status']}";
	echo "<TD>{$dados['morador_Titular']}";
	echo "<TD>{$dados['moradores']}";//puxa do cadastro de usuários
	echo "<TD>{$dados['telefone']}";
	echo "<TD> <A href='atualizar_residencia1.php?id=$id'> Atualizar </A><BR>";
	else{ //se for apartamento
	echo "<TABLE border=2>";
	echo "<TH>ID<TH>Número<TH>Andar<TH>STATUS<TH>Morador TITULAR<TH>MORADORES<TH>Telefone</TH>";
while ($dados = mysql_fetch_array($res)) {
	$id = $dados['id_Residencia'];
	echo "<TR>";
	echo "<TD>{$dados['id_Residencia']}";
	echo "<TD>{$dados['numero']}";
	echo "<TD>{$dados['andar']}";
	echo "<TD>{$dados['status']}";
	echo "<TD>{$dados['morador_Titular']}";
	echo "<TD>{$dados['moradores']}";
	echo "<TD>{$dados['telefone']}";
	echo "<TD> <A href='atualizar_residencia1.php?id=$id'> Atualizar </A><BR>";
	echo "</TR>";
};
echo "</TABLE>";
mysql_close($conexao);

?>
</BODY>
</HTML>