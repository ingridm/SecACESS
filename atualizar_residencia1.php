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

$consulta = "select * FROM residencia WHERE id = $id";
$res = mysql_query($consulta);
$dados = mysql_fetch_array($res);
$id_Residencia = $dados['id_Residencia'];
$numero = $dados['numero'];
$rua = $dados['rua'];
$andar = $dados['andar'];
$status = $dados['status'];
$morador_Titular = $dados['morador_Titular'];
$moradores = $foto['moradores'];
$telefone = $dados['telefone'];

echo "<form action='atualizar_residencia2.php' method='post'>";
echo "<TABLE>";
echo "<TR><TD><INPUT name='id_Residencia' type='hidden' value=$id size=30></TD></TR>";
echo "<TR><TD>Rua: </TD> <TD><INPUT name='rua' type='text' size=30 value='{$rua}'></TD></TR>";
echo "<TR><TD>Nº: </TD> <TD><INPUT name='numero' type='text' size=30 value='{$numero}'></TD></TR>";
echo "<TR><TD>Andar: </TD> <TD><INPUT name='andar' type='text' size=30 value='{$andar}'></TD></TR>";
echo "<TR><TD>Morador titular:: </TD> <TD><INPUT name='morador_Titular' type='text' size=30 value='{$morador_Titular}'></TD></TR>";
echo "<TR><TD>Moradores: </TD> <TD><INPUT name='moradores' type='text' size=30 value='{$moradores}'></TD></TR>";
echo "<TR><TD>Status: </TD> <TD><INPUT name='status' type='text' size=30 value='{$status}'></TD></TR>"; \\ ver foto
echo "<TR><TD>Telefone: </TD> <TD><INPUT name='telefone' type='text' size=30 value='{$telefone}'></TD></TR>";
echo "<TR><TD></TD><TD><INPUT class='botao' type='submit' value='Atualizar'></TD></TR>";
echo "</TABLE>";
echo "</FORM>";

?>

</BODY>
</HTML>