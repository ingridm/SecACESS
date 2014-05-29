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
echo "<form action='inserir_usuario1.php' method='post'>";
echo "<TABLE>";
echo "<TR><TD><INPUT name='id_Usuario' type='hidden' size=30></TD></TR>";
echo "<TR><TD>Nome: </TD> <TD><INPUT name='nome' type='text' size=30> *</TD></TR>";
echo "<TR><TD>RG: </TD> <TD><INPUT name='rg' type='text' size=30> *</TD></TR>";
echo "<TR><TD>CPF: </TD> <TD><INPUT name='cpf' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Moradia: </TD> <TD><INPUT name='moradia' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Telefone: </TD> <TD><INPUT name='telefone' type='text' size=30> *</TD></TR>";
echo "<TR><TD>E-mail: </TD> <TD><INPUT name='email' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Abrir foto: </TD> <TD><INPUT name='status' type='text' size=30> *</TD></TR>"; //ver como colocar a foto
echo "<TR><TD>Status: </TD> <TD><INPUT name='status' type='text' size=30> *</TD></TR>";

if($veiculo == sim) //checkbox
echo "<TABLE border=2>";
echo "<form action='inserir_usuario1.php' method='post'>";
echo "<TABLE>";
echo "<TR><TD>Placa: </TD> <TD><INPUT name='placa' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Modelo: </TD> <TD><INPUT name='modelo' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Cor: </TD> <TD><INPUT name='cor' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Status </TD> <TD><INPUT name='status' type='text' size=30> *</TD></TR>";
echo "</TABLE>";
echo "</FORM>";
echo "<TR><TD></TD><TD><INPUT class='botao' type='submit' value='Cadastrar'></TD></TR>";

	$insere = "INSERT INTO usuario(id_Usuario, nome, rg, cpf, telefone, email, moradia, status, placa, modelo, cor) VALUES ('$id','$nome', '$rg', '$cpf', 
'$telefone', '$email', '$foto', '$moradia', '$status', '$modelo', '$placa', '$cor')"; 
$res = mysql_query($insere);
if (!$res) {
	echo "Falhou a consulta";
};
echo "<H1> Cadastro do usuário inserido com sucesso</H1>";


}
	else {
	if($usuario_Nivel == $visitante)
		if($usuario_Nivel = $visitante)
echo "<TABLE border=2>";
echo "<form action='inserir_usuario1.php' method='post'>";
echo "<TABLE>";
echo "<TR><TD><INPUT name='id_Usuario' type='hidden' size=30></TD></TR>";
echo "<TR><TD>Nome: </TD> <TD><INPUT name='nome' type='text' size=30> *</TD></TR>";
echo "<TR><TD>RG: </TD> <TD><INPUT name='rg' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Abrir foto: </TD> <TD><INPUT name='status' type='text' size=30> *</TD></TR>"; //ver como colocar a foto
echo "<TR><TD></TD><TD><INPUT class='botao' type='submit' value='Cadastrar'></TD></TR>";
$insere = "INSERT INTO usuario(id_Usuario, nome, rg, cpf, telefone, email, moradia, status, placa, modelo, cor) VALUES ('$id','$nome', '$rg', '$cpf', 
'$telefone', '$email', '$foto', '$moradia', '$status', '$modelo', '$placa', '$cor')"; 
$res = mysql_query($insere);
if (!$res) {
	echo "Falhou a consulta";
};
echo "<H1> Cadastro do usuário inserido com sucesso</H1>";

	else{
		if($usuario_Nivel = $profissional)
echo "<TABLE border=2>";
echo "<form action='inserir_pessoa1.php' method='post'>";
echo "<TABLE>";
echo "<TR><TD><INPUT name='id_Usuario' type='hidden' size=30></TD></TR>";
echo "<TR><TD>Nome: </TD> <TD><INPUT name='nome' type='text' size=30> *</TD></TR>";
echo "<TR><TD>RG: </TD> <TD><INPUT name='rg' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Endereço: </TD> <TD><INPUT name='nome' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Matrícula: </TD> <TD><INPUT name='rg' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Telefone: </TD> <TD><INPUT name='rg' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Abrir foto: </TD> <TD><INPUT name='status' type='text' size=30> *</TD></TR>"; //ver como colocar a foto
echo "<TR><TD></TD><TD><INPUT class='botao' type='submit' value='Cadastrar'></TD></TR>";
	else{
	$insere = "INSERT INTO usuario(id_Usuario, nome, rg, cpf, telefone, email, moradia, status, placa, modelo, cor) VALUES ('$id','$nome', '$rg', '$cpf', 
'$telefone', '$email', '$foto', '$moradia', '$status', '$modelo', '$placa', '$cor')"; 
$res = mysql_query($insere);
if (!$res) {
	echo "Falhou a consulta";
};
echo "<H1> Cadastro do usuário inserido com sucesso</H1>";
?><!--<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css">
</HEAD>

<BODY>
<div id = "cabecalho"></div><!--cabecalho -->
<?php
/*include 'secacess.php';
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

$insere = "INSERT INTO usuario(id_Usuario, nome, rg, cpf, telefone, email, moradia, status, placa, modelo, cor) VALUES ('$id','$nome', '$rg', '$cpf', 
'$telefone', '$email', '$foto', '$moradia', '$status', '$modelo', '$placa', '$cor')"; 
$res = mysql_query($insere);
if (!$res) {
	echo "Falhou a consulta";
};
echo "<H1> Cadastro do usuário inserido com sucesso</H1>";
?>

</BODY>
</HTML>-->


