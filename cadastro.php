<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "secacess";
	$conexao = mysql_connect($host, $user, $pass) or die(mysql_error()) ;
	mysql_select_db($banco) or die (mysql_error());
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Cadastro - Rafael</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<nav>
		<ul>
			<li><a href="login.php">entrar</a></li>
			<li><a href="cadastro.php">Cadastrar</a></li>
		</ul>
	</nav>
	<form name="signup" method="post" action="cadastrando.php">
		<h1>Cadastrar</h1>
		<input type="text" name="nome" placeholder="Nome"></input><br />
		<input type="text" name="email" placeholder="E-mail"></input><br />
		<input type="password" name="senha" placeholder="Senha"></input><br />
		<input type="submit" value="cadastrar"></input><br />
	</form>


</body>
</html>
