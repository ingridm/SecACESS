<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css">
</HEAD>

<BODY>
<div id = "cabecalho"></div><!--cabecalho -->
<?php
include 'bd.php';

$morador = $_POST['morador'];
$visitante = $_POST['visitante'];
$profissional = $_POST['profissional'];
$id = $_POST['id_Usuario'];
$nome = $_POST['nome'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$moradia = $_POST['moradia'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$foto = $_POST['foto'];
$status = $_POST['status'];	
$placa = $_POST['placa'];
$modelo = $_POST['modelo'];
$cor = $_POST['cor'];
$endereco = $_POST['endereco'];
$matricula = $_POST['matricula'];

	if($usuario_Nivel == $morador){
echo "<TABLE border=2>";
echo "<form action='$insere' method='post'>";
echo "<TABLE>";
echo "<TR><TD><INPUT name='id_Usuario' type='hidden' size=30></TD></TR>";
echo "<TR><TD>Nome: </TD> <TD><INPUT name='nome' type='text' size=30> *</TD></TR>";
echo "<TR><TD>RG: </TD> <TD><INPUT name='rg' type='text' size=30> *</TD></TR>";
echo "<TR><TD>CPF: </TD> <TD><INPUT name='cpf' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Moradia: </TD> <TD><INPUT name='moradia' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Telefone: </TD> <TD><INPUT name='telefone' type='text' size=30> *</TD></TR>";
echo "<TR><TD>E-mail: </TD> <TD><INPUT name='email' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Abrir foto: </TD> <TD><INPUT name='status' type='text' size=30> *</TD></TR>"; //ver como colocar a foto tipo em anexo
echo "<TR><TD>Status: </TD> <TD><INPUT name='status' type='text' size=30> *</TD></TR>";

echo "<h1>O usuário possui veículo:</h1>";
echo "<form method='post' action='$insere.php'>";
echo "<input type='radio' name='$veiculo' value='sim'/>Sim<br/>"
echo "<input type='radio' name='veiculo' value='$nao'/>Não<br/>"
echo "<input type='submit' value='Enviar'/>"
echo "</form>"

	if($veiculo == sim){ //checkbox
echo "<TABLE border=2>";
echo "<form action='$insere' method='post'>";
echo "<TABLE>";
echo "<TR><TD>Placa: </TD> <TD><INPUT name='placa' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Modelo: </TD> <TD><INPUT name='modelo' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Cor: </TD> <TD><INPUT name='cor' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Status </TD> <TD><INPUT name='status' type='text' size=30> *</TD></TR>";
echo "<TR><TD></TD><TD><INPUT class='botao' type='submit' value='Cadastrar'></TD></TR>";
echo "</TABLE>";
echo "</FORM>";
}
$insere = "INSERT INTO usuario(nome, rg, cpf, telefone, email, moradia, status_Usuario, placa, modelo, cor, status_Veiculo) VALUES ('$nome', 'rg', '$cpf', '$telefone', '$email', '$foto', '$moradia', '$status_Usuario''$placa','$modelo', '$cor', '$status_Veiculo')"; 
$res = mysql_query($insere);
if (!$res) {
	echo "Falhou a consulta";
};
echo "<H1> Cadastro do usuário inserido com sucesso</H1>";

	if($veiculo == não){
	$insere = "INSERT INTO usuario(id_Usuario, nome, rg, cpf, telefone, email, moradia, status) VALUES ('$id','$nome', '$rg', '$cpf', 
'$telefone', '$email', '$foto', '$moradia', '$status')"; 
$res = mysql_query($insere);
if (!$res) {
	echo "Falhou a consulta";
};
echo "<H1> Cadastro do usuário inserido com sucesso</H1>";
}
	else {
	if($usuario_Nivel == $visitante){
echo "<TABLE border=2>";
echo "<form action='$insere.php' method='post'>";
echo "<TABLE>";
echo "<TR><TD><INPUT name='id_Usuario' type='hidden' size=30></TD></TR>";
echo "<TR><TD>Nome: </TD> <TD><INPUT name='nome' type='text' size=30> *</TD></TR>";
echo "<TR><TD>RG: </TD> <TD><INPUT name='rg' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Abrir foto: </TD> <TD><INPUT name='foto' type='text' size=30> *</TD></TR>"; //ver como colocar a foto
echo "<TR><TD>Status: </TD> <TD><INPUT name='status' type='text' size=30> *</TD></TR>";

echo "<h1>O usuário possui veículo:</h1>";
echo "<form method='post' action='$insere.php'>";
echo "<input type='radio' name='veiculo' value='Sim'/>Sim<br/>"
echo "<input type='radio' name='veiculo' value='Não' />Não<br /><br/>"
echo "<input type='submit' value='Enviar'/>"
echo "</form>"

	if($veiculo == sim){ //checkbox
echo "<TABLE border=2>";
echo "<form action='$insere' method='post'>";
echo "<TABLE>";
echo "<TR><TD>Placa: </TD> <TD><INPUT name='placa' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Modelo: </TD> <TD><INPUT name='modelo' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Cor: </TD> <TD><INPUT name='cor' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Status </TD> <TD><INPUT name='status' type='text' size=30> *</TD></TR>";
echo "<TR><TD></TD><TD><INPUT class='botao' type='submit' value='Cadastrar'></TD></TR>";
echo "</TABLE>";
echo "</FORM>";
}
$insere = "INSERT INTO usuario(placa, modelo, cor, status) VALUES ('$placa','$modelo', '$cor', '$status')"; 
$res = mysql_query($insere);
if (!$res) {
	echo "Falhou a consulta";
};
echo "<H1> Cadastro do usuário inserido com sucesso</H1>";

$insere = "INSERT INTO usuario(id_Usuario, nome, rg, fot, status) VALUES ('$id','$nome', '$rg', '$foto', '$status')"; 
$res = mysql_query($insere);
if (!$res) {
	echo "Falhou a consulta";
};
echo "<H1> Cadastro do usuário inserido com sucesso</H1>";
}
	else{
		if($usuario_Nivel = $profissional){
echo "<TABLE border=2>";
echo "<form action='$insere' method='post'>";
echo "<TABLE>";
echo "<TR><TD><INPUT name='id_Usuario' type='hidden' size=30></TD></TR>";
echo "<TR><TD>Nome: </TD> <TD><INPUT name='nome' type='text' size=30> *</TD></TR>";
echo "<TR><TD>RG: </TD> <TD><INPUT name='rg' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Endereço: </TD> <TD><INPUT name='endereco' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Matrícula: </TD> <TD><INPUT name='matricula' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Telefone: </TD> <TD><INPUT name='telefone' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Abrir foto: </TD> <TD><INPUT name='foto' type='text' size=30> *</TD></TR>"; //ver como colocar a foto
echo "<TR><TD>Status: </TD> <TD><INPUT name='status' type='text' size=30> *</TD></TR>";

echo "<h1>O usuário possui veículo:</h1>";
echo "<form method='post' action='inserir_usuario1.php'>";
echo "<input type='radio' name='veiculo' value='sim' />Sim<br/>"
echo "<input type='radio' name='veiculo' value='não' />Não<br /><br/>"
echo "<input type='submit' value='Enviar'/>"
echo "</form>"

	if($veiculo == sim) //checkbox
echo "<TABLE border=2>";
echo "<form action='$insere' method='post'>";
echo "<TABLE>";
echo "<TR><TD>Placa: </TD> <TD><INPUT name='placa' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Modelo: </TD> <TD><INPUT name='modelo' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Cor: </TD> <TD><INPUT name='cor' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Status </TD> <TD><INPUT name='status' type='text' size=30> *</TD></TR>";
echo "</TABLE>";
echo "</FORM>";
echo "<TR><TD></TD><TD><INPUT class='botao' type='submit' value='Cadastrar'></TD></TR>";

$insere = "INSERT INTO usuario(placa, modelo, cor, status) VALUES ('$placa','$modelo', '$cor', '$status')"; 
$res = mysql_query($insere);
if (!$res) {
	echo "Falhou a consulta";
};
echo "<H1> Cadastro do usuário inserido com sucesso</H1>";
echo "<TR><TD></TD><TD><INPUT class='botao' type='submit' value='Cadastrar'></TD></TR>";

	$insere = "INSERT INTO usuario(id_Usuario, nome, rg, endereco, matricula, telefone, foto, status) VALUES ('$id_Usuario','$nome', '$rg', '$endereco', 
'$matriula', '$telefone', '$foto', '$status')"; 
$res = mysql_query($insere);
if (!$res) {
	echo "Falhou a consulta";
};
echo "<H1> Cadastro do usuário inserido com sucesso</H1>";

	if($veiculo == sim) //checkbox
echo "<TABLE border=2>";
echo "<form action='$insere' method='post'>";
echo "<TABLE>";
echo "<TR><TD>Placa: </TD> <TD><INPUT name='placa' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Modelo: </TD> <TD><INPUT name='modelo' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Cor: </TD> <TD><INPUT name='cor' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Status </TD> <TD><INPUT name='status' type='text' size=30> *</TD></TR>";
echo "</TABLE>";
echo "</FORM>";
echo "<TR><TD></TD><TD><INPUT class='botao' type='submit' value='Cadastrar'></TD></TR>";

$insere = "INSERT INTO usuario(placa, modelo, cor, status) VALUES ('$placa','$modelo', '$cor', '$status')"; 
$res = mysql_query($insere);
if (!$res) {
	echo "Falhou a consulta";
};
echo "<H1> Cadastro do usuário inserido com sucesso</H1>";


