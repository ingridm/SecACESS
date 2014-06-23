<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css">
</HEAD>

<BODY>
<div id = "cabecalho"></div>
<LINK REL="STYLESHEET"HREF="estilo.css" TYPE="text/css"> 
<ul>
<li><a href="#" title="Home">Home</a></li>
<li><a href="#" title="Contato">Contato</a></li>
<li>
<a href="#" title="Residencia">Residencia</a>
<ul>

	<li><a href="consultar_usuario" title ="Consultar">Consultar</a></li>
</ul>
</li>
<li>
<a href="#" title="Morador">Morador</a>
<ul>
		<li><a href="atualizar_usuario.php" title="Atualizar">Atualizar  </a></li>
        <li><a href="#" title ="Consultar">Consultar</a></li>
        </ul></li>
<li>
<a href="login_admin.html" title="">Acesso Restrito</a></li>
<li><a href="logout.php" title="Home">Sair</a></li>
</li>

<!--cabecalho -->
<?php
include 'db.php';

$consulta = "select * FROM usuario";
$res = mysql_query($consulta);

echo "<br><br><h1>Consultar Usuários Cadastrados<h1>"; 
echo " <BR>";
echo "<TABLE border=2>";
echo "<TH>ID<TH>Nome<TH>RG<TH>CPF<TH>Telefone<TH>E-mail<TH>Abrir Foto<TH>Moradia<TH>Status Usuario"; //em veículo abrir outro   para ver as infos do veiculo
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
	echo "<TD>{$dados['status']}";
	//echo "<TD>{$dados['placa']}";
	//echo "<TD>{$dados['modelo']}";
	//echo "<TD>{$dados['cor']}";
	//echo "<TD>{$dados['status_Veiculo']}";
	echo "</TR>";
};
echo "</TABLE>";
mysql_close($conexao);
?>
</BODY>
</HTML>