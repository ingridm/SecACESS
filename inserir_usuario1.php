<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css">
</HEAD>

<BODY>
<div id = "cabecalho"></div><!--cabecalho -->
<?php
include 'secacess.php';

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

$insereusu = "INSERT INTO usuario(nome, rg, cpf, telefone, email, moradia, status_Usuario) VALUES ('$nome', 'rg', '$cpf', '$telefone', '$email', '$foto', '$moradia', '$status_Usuario')"; 
$res = mysql_query($insere);
if (!$res) {
	echo "Falhou a consulta";
};
echo "<H1> Cadastro do usuário inserido com sucesso</H1>";

$inserevei = "INSERT INTO usuario(placa, modelo, cor, status_Veiculo) VALUES ('$placa','$modelo', '$cor', '$status_Veiculo')"; 
$res = mysql_query($insere);
if (!$res) {
	echo "Falhou a consulta";
};
echo "<H1> Cadastro do veículo inserido com sucesso</H1>";

$inserevisi = "INSERT INTO usuario(id_Usuario, nome, rg, fot, status) VALUES ('$id','$nome', '$rg', '$foto', '$status')"; 
$res = mysql_query($insere);
if (!$res) {
	echo "Falhou a consulta";
};
echo "<H1> Cadastro do usuário inserido com sucesso</H1>";

$insereveivisi = "INSERT INTO usuario(placa, modelo, cor, status) VALUES ('$placa','$modelo', '$cor', '$status')"; 
$res = mysql_query($insere);
if (!$res) {
	echo "Falhou a consulta";
};
echo "<H1> Cadastro do veículo inserido com sucesso</H1>";

$insereprof = "INSERT INTO usuario(id_Usuario, nome, rg, endereco, matricula, telefone, foto, status) VALUES ('$id_Usuario','$nome', '$rg', '$endereco', 
'$matriula', '$telefone', '$foto', '$status')"; 
$res = mysql_query($insere);
if (!$res) {
	echo "Falhou a consulta";
};
echo "<H1> Cadastro do usuário inserido com sucesso</H1>";

$insereveiprof = "INSERT INTO usuario(placa, modelo, cor, status) VALUES ('$placa','$modelo', '$cor', '$status')"; 
$res = mysql_query($insere);
if (!$res) {
	echo "Falhou a consulta";
};
echo "<H1> Cadastro do usuário inserido com sucesso</H1>";


