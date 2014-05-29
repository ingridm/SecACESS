<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css">
</HEAD>

<BODY>
<div id = "cabecalho"></div><!--cabecalho -->
<?php
include 'db.php';
   
$id = $_GET['id'];

$consulta = "select * FROM usuario WHERE id = $id";
$res = mysql_query($consulta);
$dados = mysql_fetch_array($res);
$id_Usuario = $dados['id_Usuario'];
$nome = $dados['nome'];
$rg = $dados['rg'];
$cpf = $dados['cpf'];
$telefone = $dados['telefone'];
$email = $dados['email'];
$foto = $foto['foto'];
$moradia = $dados['moradia'];
$status = $dados['status'];

echo "<form action='atualizar_usuario2.php' method='post'>";
echo "<TABLE>";
echo "<TR><TD><INPUT name='id_Usuario' type='hidden' value=$id size=30></TD></TR>";
echo "<TR><TD>Nome </TD> <TD><INPUT name='titulo' type='text' size=30 value='{$nome}'></TD></TR>";
echo "<TR><TD>RG: </TD> <TD><INPUT name='rg' type='text' size=30 value='{$rg}'></TD></TR>";
echo "<TR><TD>CPF: </TD> <TD><INPUT name='cpf' type='text' size=30 value='{$cpf}'></TD></TR>";
echo "<TR><TD>Telefone: </TD> <TD><INPUT name='telefone' type='text' size=30 value='{$telefone}'></TD></TR>";
echo "<TR><TD>E-mail: </TD> <TD><INPUT name='email' type='text' size=30 value='{$email}'></TD></TR>";
echo "<TR><TD>Abrir foto: </TD> <TD><INPUT name='foto' type='text' size=30 value='{$foto}'></TD></TR>"; \\ ver foto
echo "<TR><TD>Moradia: </TD> <TD><INPUT name='moradia' type='text' size=30 value='{$moradia}'></TD></TR>";
echo "<TR><TD>Status: </TD> <TD><INPUT name='status' type='text' size=30 value='{$status}'></TD></TR>";
echo "<TR><TD></TD><TD><INPUT class='botao' type='submit' value='Atualizar'></TD></TR>";
echo "</TABLE>";
echo "</FORM>";

?>

</BODY>
</HTML>