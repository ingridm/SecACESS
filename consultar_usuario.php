<HTML>
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

echo "<HR> <BR>";
echo "<h1>Consultar Usuários Cadastrados<h1>"; 
echo "<TABLE border=2>";
echo "<TH>ID<TH>Nome<TH>RG<TH>CPF<TH>Telefone<TH>E-mail<TH>Abrir Foto<TH>Moradia<TH>Status<TH>Veículo"; //em veículo abrir outro   para ver as infos do veiculo
while ($dados = mysql_fetch_array($res)) {
	echo "<TR>";
	echo "<TD>{$dados['id_Usuario']}";
	echo "<TD>{$dados['nome']}";
	echo "<TD>{$dados['rg']}";
	echo "<TH>{$dados['cpf']}";
	echo "<TH>{$dados['telefone']}";
	echo "<TD>{$dados['email']}";
	echo "<TD>{$dados['foto']}";
	echo "<TD>{$dados['moradia']}";
	echo "<TD>{$dados['status_Usuario']}";
	echo "<TD>{$dados['placa']}";
	echo "<TD>{$dados['modelo']}";
	echo "<TD>{$dados['cor']}";
	echo "<TD>{$dados['status_Veiculo']}";
	echo "</TR>";
};
echo "</TABLE>";
mysql_close($conexao);
?>
</BODY>
</HTML>