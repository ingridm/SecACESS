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
echo "<form method='post' action='inserir_usuario1.php'>";
echo "<input type='radio' name='usuario_Nivel' value='morador'/>Morador<br/>"
echo "<input type='radio' name='usuario_Nivel' value='visitante' />Visitante<br /><br/>"
echo "<input type='radio' name='usuario_Nivel' value='profissional' />Profissional<br /><br/>"
echo "<input type='submit' value='Enviar'/>"
echo "</form>"
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
	if($usuario_Nivel = $visitante)
echo "<TABLE border=2>";
echo "<form action='inserir_pessoa1.php' method='post'>";
echo "<TABLE>";
echo "<TR><TD><INPUT name='id_Usuario' type='hidden' size=30></TD></TR>";
echo "<TR><TD>Nome: </TD> <TD><INPUT name='nome' type='text' size=30> *</TD></TR>";
echo "<TR><TD>RG: </TD> <TD><INPUT name='rg' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Abrir foto: </TD> <TD><INPUT name='status' type='text' size=30> *</TD></TR>"; //ver como colocar a foto
echo "<TR><TD></TD><TD><INPUT class='botao' type='submit' value='Cadastrar'></TD></TR>";
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
echo "<h1>O usuário possui veículo:</h1>";
echo "<form method='post' action='inserir_usuario1.php'>";
echo "<input type='radio' name='veiculo' value='Sim' />Sim<br/>"
echo "<input type='radio' name='veiculo' value='Não' />Não<br /><br/>"
echo "<input type='submit' value='Enviar'/>"
echo "</form>"
	if($veiculo == 1) //checkbox
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