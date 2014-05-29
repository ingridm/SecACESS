<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css">
</HEAD>

<BODY>
<div id = "cabecalho"></div><!--cabecalho -->
<?php
include 'secacess.php';

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

$insere = "INSERT INTO pessoa(Id_Pessoa, nome, rg, cpf, telefone, email, moradia, status, placa, modelo, cor) VALUES ('$id','$nome', '$rg', '$cpf', 
'$telefone', '$email', '$foto', '$moradia', '$status', '$modelo', '$placa', '$cor')"; 
$res = mysql_query($insere);
if (!$res) {
	echo "Falhou a consulta";
};
echo "<H1> Cadastro do usuário inserido com sucesso</H1>";
?>

</BODY>
</HTML>


