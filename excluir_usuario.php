<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css">
</HEAD>

<BODY>
<div id = "cabecalho"></div><!--cabecalho -->
<?php
include 'db.php';

$consulta = "select * FROM usuario";
$res = mysql_query($consulta);

//$sql = "DELETE FROM filmes WHERE titulo='id'"; 
//$res = mysql_query($conn, "$sql");

echo "<TABLE border=1>";
echo "<TH>ID<TH>Nome<TH>RG<TH>CPF<TH>Telefone<TH>Abrir foto<th>E-mail<th>Residência<TH>Status<TH>Placa<TH>Modelo<TH>Cor<TH>Status Veículo<TH>Excluir";
while ($dados = mysql_fetch_array($res)) {
	$id = $dados['id_Usuario'];
	echo "<TR>";
	echo "<TD>{$dados['id_Usuario']}";
	echo "<TD>{$dados['nome']}";
	echo "<TD>{$dados['rg']}";
	echo "<TD>{$dados['cpf']}";
	echo "<TD>{$dados['telefone']}";
	echo "<TD>{$dados['foto']}";
	echo "<TD>{$dados['email']}";
	echo "<TD>{$dados['moradia']}";
	echo "<TD>{$dados['status_Usuario']}";
	echo "<TD>{$dados['placa']}";
	echo "<TD>{$dados['modelo']}";
	echo "<TD>{$dados['cor']}";
	echo "<TD>{$dados['status_Veiculo']}";
	
	echo "<TD> <A href='excluir_usuario1.php?id=$id'> Apagar </A><BR>";
	echo "</TR>";
};
echo "</TABLE>";
mysql_close($conexao);

?>
</BODY>
</HTML>