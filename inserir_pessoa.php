<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css">
</HEAD>
<BODY>
<div id = "cabecalho"></div><!--cabecalho -->
<?php

echo "<HR> <BR>";
echo "<h1>Cadastro de Usuário</h1>"; 
	if($usuario_Nivel == $morador)
echo "<TABLE border=2>";
echo "<form action='inserir_pessoa1.php' method='post'>";
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
echo "<TR><TD></TD><TD><INPUT class='botao' type='submit' value='Cadastrar'></TD></TR>";
	else {
echo "<TR><TD>Nome: </TD> <TD><INPUT name='nome' type='text' size=30> *</TD></TR>";
echo "<TR><TD>RG: </TD> <TD><INPUT name='rg' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Abrir foto: </TD> <TD><INPUT name='status' type='text' size=30> *</TD></TR>"; //ver como colocar a foto
echo "<TR><TD></TD><TD><INPUT class='botao' type='submit' value='Cadastrar'></TD></TR>";
	break;
	if($veiculo == 1) //checkbox
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