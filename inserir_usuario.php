<HTML>
<HEAD>
<title>SecAcess Web</title>	
<script src ="jquery-2.1.1.js" type ="text/javascript"></script>
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
   $("#maior_idade").click(function(evento){
      if ($("#maior_idade").attr("checked")){
         $("#formulariomaiores").css("display", "block");
      }else{
         $("#formulariomaiores").css("display", "none");
      }
   });
});
</script>
</head>

<body>

<form>
Nome: <input type="text" name="nome">
<br>
<input type="checkbox" name="maior_idade" value="1" id="maior_idade"> Sou maior de idade
<br>
<div id="formulariomaiores" style="display: none;">
Dado para maiores de idade: <input type="text" name="maiores_idade">
</div>
</form>

</body>
</html>