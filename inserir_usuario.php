<HTML>
<HEAD>
<title>SecAcess Web</title>	
<script src ="jquery-2.1.1.js" type ="text/javascript"></script>
<script src ="jquery-1.3.2.min.js" type ="text/javascript"></script>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" style type="text/css" href="estilo.css">
<style type ="text/css">
.estilo{
background-color: #ff8800;
font-weight: bold;
}
</style>
<script>
$(document).ready(function(){
   $("#morador").click(function(evento){
      if ($("#morador").attr("checked")){
         $("#usuarionivel_morador").css("display", "block");
      }else{
         $("#usuarionivel_morador").css("display", "none");
      }
   });
});
</script>
<script>
$(document).ready(function(){
   $("#sim").click(function(evento){
      if ($("#sim").attr("checked")){
         $("#veiculo_sim").css("display", "block");
      }else{
         $("#veiculo_sim").css("display", "none");
      }
   });
});
</script>
<script>
$(document).ready(function(){
   $("#visitante").click(function(evento){
      if ($("#visitante").attr("checked")){
         $("#usuarionivel_visitante").css("display", "block");
      }else{
         $("#usuarionivel_visitante").css("display", "none");
      }
   });
});
</script>
<script>
$(document).ready(function(){
   $("#visitante_sim").click(function(evento){
      if ($("#visitante_sim").attr("checked")){
         $("#veiculovis_sim").css("display", "block");
      }else{
         $("#veiculovis_sim").css("display", "none");
      }
   });
});
</script>
<script>
$(document).ready(function(){
   $("#profissional").click(function(evento){
      if ($("#profissional").attr("checked")){
         $("#usuarionivel_profissional").css("display", "block");
      }else{
         $("#usuarionivel_profissional").css("display", "none");
      }
   });
});
</script>
<script>
$(document).ready(function(){
   $("#profsim").click(function(evento){
      if ($("#profsim").attr("checked")){
         $("#veiculoprof").css("display", "block");
      }else{
         $("#veiculoprof").css("display", "none");
      }
   });
});
</script>
</head>

<body>
<?php

echo "<HR> <BR>";
echo "<h1>Cadastro de Novo Usuário</h1>"; 
echo "<h1>Selecione o tipo de usuário que será cadastrado</h1>";
echo "<form method='post' action='inserir_usuario1.php'>";
echo "<input type='checkbox' name='morador' value='1' id='morador'/>Morador<br/>";
echo "<input type='checkbox' name='visitante' value='1' id='visitante'/>Visitante<br/>";
echo "<input type='checkbox' name='profissional' value='1' id='profissional'/>Profissional<br/>";

echo "<div id='usuarionivel_morador' style='display: none;'>";
echo "<h1>Cadastro de novo morador</h1>";
echo "<TABLE border=2>";
echo "<form action='$insereusu' method='post' action='inserir_usuario1.php>";
echo "<TABLE>";
echo "<TR><TD><INPUT name='id_Usuario' type='hidden' size=30></TD></TR>";
echo "<TR><TD>Nome: </TD> <TD><INPUT name='nome' type='text' size=30> *</TD></TR>";
echo "<TR><TD>RG: </TD> <TD><INPUT name='rg' type='text' size=30> *</TD></TR>";
echo "<TR><TD>CPF: </TD> <TD><INPUT name='cpf' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Moradia: </TD> <TD><INPUT name='moradia' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Telefone: </TD> <TD><INPUT name='telefone' type='text' size=30> *</TD></TR>";
echo "<TR><TD>E-mail: </TD> <TD><INPUT name='email' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Abrir foto: </TD> <TD><INPUT name='status' type='text' size=30> *</TD></TR>"; //ver como colocar a foto tipo em anexo
echo "<TR><TD>Status: </TD> <TD><INPUT name='status' type='text' size=30> *</TD></TR>";

echo "<h1>O usuário possui veículo:</h1>";
echo "<form method='post' action='inserir_usuario1.php'>";
echo "<input type='checkbox' name='veiculo_sim' value='sim' id='sim'/>Sim<br/>";
echo "<input type='checkbox' name='veiculo_nao' value='nao' id='nao'/>Não<br/>";
echo "<input type='submit' value='Enviar'/>";
echo "</form>";

echo "<div id='veiculo_sim' style='display: none;'>";
echo "<h1>Cadastro de novo veículo</h1>";
echo "<TABLE border=2>";
echo "<form action='$inserevei' method='post' action='inserir_usuario1'>";
echo "<TABLE>";
echo "<TR><TD>Placa: </TD> <TD><INPUT name='placa' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Modelo: </TD> <TD><INPUT name='modelo' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Cor: </TD> <TD><INPUT name='cor' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Status </TD> <TD><INPUT name='status' type='text' size=30> *</TD></TR>";
echo "<TR><TD></TD><TD><INPUT class='botao' type='submit' value='Cadastrar'></TD></TR>";
echo "</TABLE>";
echo "</FORM>";

echo "<div id='usuarionivel_visitante' style='display: none;'>";
echo "<h1>Cadastro de novo visitante</h1>";
echo "<TABLE border=2>";
echo "<form action='$inserevisi' method='post'>";
echo "<TABLE>";
echo "<TR><TD><INPUT name='id_Usuario' type='hidden' size=30></TD></TR>";
echo "<TR><TD>Nome: </TD> <TD><INPUT name='nome' type='text' size=30> *</TD></TR>";
echo "<TR><TD>RG: </TD> <TD><INPUT name='rg' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Abrir foto: </TD> <TD><INPUT name='foto' type='text' size=30> *</TD></TR>"; //ver como colocar a foto
echo "<TR><TD>Status: </TD> <TD><INPUT name='status' type='text' size=30> *</TD></TR>";

echo "<h1>O visitante possui veículo:</h1>";
echo "<form method='post' action='$insereveivisi'>";
echo "<input type='checkbox' name='veiculo' value='Sim' id='visitante_sim'/>Sim<br/>";
echo "<input type='checkbox' name='veiculo' value='Não' id='visitante_nao'/>Não<br/>";
echo "<input type='submit' value='Enviar'/>";
echo "</form>";

echo "<div id='veiculovis_sim' style='display: none;'>";
echo "<h1>Cadastro de novo veículo</h1>";
echo "<TABLE border=2>";
echo "<form action='$insereveivisi' method='post' action='inserir_usuario1.php'>";
echo "<TABLE>";
echo "<TR><TD>Placa: </TD> <TD><INPUT name='placa' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Modelo: </TD> <TD><INPUT name='modelo' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Cor: </TD> <TD><INPUT name='cor' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Status </TD> <TD><INPUT name='status' type='text' size=30> *</TD></TR>";
echo "<TR><TD></TD><TD><INPUT class='botao' type='submit' value='Cadastrar'></TD></TR>";
echo "</TABLE>";
echo "</FORM>";

echo "<div id='usuarionivel_profissional' style='display: none;'>";
echo "<h1>Cadastro de novo Profissional</h1>";
echo "<TABLE border=2>";
echo "<form action='$insereprof' method='post'>";
echo "<TABLE>";
echo "<TR><TD><INPUT name='id_Usuario' type='hidden' size=30></TD></TR>";
echo "<TR><TD>Nome: </TD> <TD><INPUT name='nome' type='text' size=30> *</TD></TR>";
echo "<TR><TD>RG: </TD> <TD><INPUT name='rg' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Endereço: </TD> <TD><INPUT name='endereco' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Matrícula: </TD> <TD><INPUT name='matricula' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Telefone: </TD> <TD><INPUT name='telefone' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Abrir foto: </TD> <TD><INPUT name='foto' type='text' size=30> *</TD></TR>"; //ver como colocar a foto
echo "<TR><TD>Status: </TD> <TD><INPUT name='status' type='text' size=30> *</TD></TR>";

echo "<h1>O profissional possui veículo:</h1>";
echo "<form method='post' action='inserir_usuario1.php'>";
echo "<input type='radio' name='veiculo' value='sim' id='profsim'/>Sim<br/>";
echo "<input type='radio' name='veiculo' value='não' id='profnao'/>Não<br/>";
echo "<input type='submit' value='Enviar'/>";
echo "</form>";

echo "<div id='veiculoprof' style='display: none;'>";
echo "<h1>Cadastro de novo veículo</h1>";
echo "<TABLE border=2>";
echo "<form action='$insereveiprof' method='post'>";
echo "<TABLE>";
echo "<TR><TD>Placa: </TD> <TD><INPUT name='placa' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Modelo: </TD> <TD><INPUT name='modelo' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Cor: </TD> <TD><INPUT name='cor' type='text' size=30> *</TD></TR>";
echo "<TR><TD>Status </TD> <TD><INPUT name='status' type='text' size=30> *</TD></TR>";
echo "</TABLE>";
echo "</FORM>";
echo "<TR><TD></TD><TD><INPUT class='botao' type='submit' value='Cadastrar'></TD></TR>";

?>
</form>
</body>
</html>