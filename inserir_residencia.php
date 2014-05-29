<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css">
</HEAD>
<BODY>
<div id = "cabecalho"></div><!--cabecalho -->
<?php

echo "<HR> <BR>";
echo "<h1>Cadastro de Residência</h1>"; 
	if($residencia_Nivel == $casa) //se for casa
echo "<TABLE border=2>";
echo "<form action='inserir_residencia1.php' method='post'>";
echo "<TABLE>";
echo "<TR><TD><INPUT name='id_Residencia' type='hidden' size=30></TD></TR>";	
echo "<TR><TD>Rua: </TD> <TD><INPUT name='rua' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Número </TD> <TD><INPUT name='numero' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Telefone: </TD> <TD><INPUT name='telefone' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Morador Titular: </TD> <TD><INPUT name='morador_Titular' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Moradores: </TD> <TD><INPUT name='moradores' type='text' size=30> *</TD></TR>"; //tem que puxar automaticamente do cadastro de usuários
echo "<TR><TD>Status: </TD> <TD><INPUT name='status' type='text' size=30> *</TD></TR>";
echo "<TR><TD></TD><TD><INPUT class='botao' type='submit' value='Incluir'></TD></TR>";
	else { //se for apartamento
echo "<TABLE border=2>";
echo "<form action='inserir_residencia1.php' method='post'>";
echo "<TABLE>";
echo "<TR><TD><INPUT name='id_Residencia' type='hidden' size=30></TD></TR>";	
echo "<TR><TD>Número: </TD> <TD><INPUT name='numero' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Andar: </TD> <TD><INPUT name='andar' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Telefone: </TD> <TD><INPUT name='telefone' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Morador Titular: </TD> <TD><INPUT name='morador_Titular' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Moradores: </TD> <TD><INPUT name='moradores' type='text' size=30> *</TD></TR>"; //tem que puxar automaticamente do cadastro de usuários
echo "<TR><TD>Status: </TD> <TD><INPUT name='status' type='text' size=30> *</TD></TR>";
echo "<TR><TD></TD><TD><INPUT class='botao' type='submit' value='Incluir'></TD></TR>";
echo "</TABLE>";
echo "</FORM>";
?>
</BODY>
</HTML>