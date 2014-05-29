<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css">
</HEAD>

<BODY>
<div id = "cabecalho"></div><!--cabecalho -->
<?php
include 'secacess.php';

$id = $_POST['id_Residencia'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$telefone = $_POST['telefone'];
$morador_Titular = $_POST['morador_Titular'];
$moradores = $_POST['moradores'];
$status_Residencia = $_POST['status_Residencia'];

$insere = "INSERT INTO residencia(id_Residencia, rua, numero, telefone, morador_Titular, moradores, status_Residencia) VALUES 
('$id_Residencia','$rua', '$numero', '$telefone', '$morador_Titular', '$moradores', '$status_Residencia')"; 
$res = mysql_query($insere);
if (!$res) {
	echo "Falhou a consulta";
};
echo "<H1> Cadastro de Residência inserido com sucesso</H1>";
?>

</BODY>
</HTML>
