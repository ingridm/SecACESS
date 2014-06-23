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

//$sql = "DELETE FROM residencia WHERE nome='id'"; 
//$res = mysql_query($conn, "$sql");

echo "<TABLE border=1>";
echo "<TH>ID<TH>Rua<TH>Nº<TH>Andar<TH>Status<TH>Morador Titular<th>Moradores<TH>Excluir";
while ($dados = mysql_fetch_array($res)) {
	$id = $dados['id_Residencia'];
	echo "<TR>";
	echo "<TD>{$dados['id_Residencia']}";
	echo "<TD>{$dados['rua']}";
	echo "<TD>{$dados['numero']}";
	echo "<TD>{$dados['andar']}";
	echo "<TD>{$dados['status_Residencia']}";
	echo "<TD>{$dados['morador_Titular']}";
	echo "<TD>{$dados['moradores']}";
	
	echo "<TD> <A href='excluir_residencia1.php'>Excluir</A><BR>";
	echo "</TR>";
};
echo "</TABLE>";
mysql_close($conexao);

?>
</BODY>
</HTML>