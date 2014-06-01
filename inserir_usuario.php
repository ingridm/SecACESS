<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css">
</HEAD>
<BODY>
<div id = "cabecalho"></div><!--cabecalho -->
<?php
echo "<HR> <BR>";
echo "<h1>Cadastro de Novo Usuário</h1>"; 
echo "<h1>Selecione o tipo de usuário que será cadastrado</h1>";
echo "<form method='post' action='inserir_usuario.php'>";
echo "<input type='radio' name='morador' value='morador'/>Morador<br/>";
echo "<input type='radio' name='visitante' value='visitante' />Visitante<br />";
echo "<input type='radio' name='profissional' value='profissional' />Profissional<br /><br/>";
echo "<input type='submit' value='Enviar'/>";
echo "</form>";
	
	if($veiculo == sim){ //checkbox
echo "<TABLE border=2>";
echo "<form action='inserir_usuario1.php' method='post'>";
echo "<TABLE>";
echo "<TR><TD>Placa: </TD> <TD><INPUT name='placa' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Modelo: </TD> <TD><INPUT name='modelo' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Cor: </TD> <TD><INPUT name='cor' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Status </TD> <TD><INPUT name='status' type='text' size=30> *</TD></TR>";
echo "</TABLE>";
echo "</FORM>";
}
?>
</BODY>
</HTML>