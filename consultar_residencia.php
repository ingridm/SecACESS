<div id = "cabecalho"></div><!--cabecalho -->
<?php
include 'db.php';

$consulta = "select * FROM usuario";
$res = mysql_query($consulta);

echo "<HR> <BR>";
echo "<h1>Consultar Residencias Cadastradas<h1>"; 
	if(residencia_Nivel == $casa) //se for casa
echo "<TABLE border=2>";
echo "<TH>ID<TH>Rua<TH>Nº<TH>Status<TH>Morador Titular<TH>Telefone<TH>Moradores";
while ($dados = mysql_fetch_array($res)) {
	echo "<TR>";
	echo "<TD>{$dados['id_Residencia']}";
	echo "<TD>{$dados['rua']}";
	echo "<TD>{$dados['numero']}";
	echo "<TH>{$dados['status_Residencia']}";
	echo "<TH>{$dados['morador_Titular']}";
	echo "<TD>{$dados['telefone']}";
	echo "<TD>{$dados['moradores']}"; //puxa os moradores da residencia
	echo "</TR>";
};
	else{ //se for apartamento
	echo "<TABLE border=2>";
echo "<TH>ID<TH>Nº<TH>Andar<TH>Status<TH>Morador Titular<TH>Telefone<TH>Moradores";
while ($dados = mysql_fetch_array($res)) {
	echo "<TR>";
	echo "<TD>{$dados['id_Residencia']}";
	echo "<TD>{$dados['numero']}";
	echo "<TD>{$dados['andar']}";
	echo "<TH>{$dados['status_Residencia']}";
	echo "<TH>{$dados['morador_Titular']}";
	echo "<TD>{$dados['telefone']}";
	echo "<TD>{$dados['moradores']}"; //puxa os moradores da residencia
	echo "</TR>";
};
echo "</TABLE>";
mysql_close($conexao);
?>
</BODY>
</HTML>