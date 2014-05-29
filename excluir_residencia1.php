<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css">
</HEAD>

<BODY>
<div id = "cabecalho"></div><!--cabecalho -->
<?php
include 'db.php';
   
$id = $_POST['id_Residencia'];

$sql = "DELETE FROM usuario WHERE id_Residencia ='$id'"; 
$res = mysql_query($sql);
if (!$res) {
	echo "Falhou a consulta";
};
echo "<H1> Residência excluída com sucesso</H1>";

mysql_close($conexao);
?>

</BODY>
</HTML>