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
	<title>BEM VINDO</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<nav>
		<ul>
			<li><a href="login.php">entrar</a></li>
			<li><a href="cadastro.php">Cadastrar</a></li>
		</ul>
	</nav>
	<form name="loginform" method="post" action="userauthentication.php">
		<h1>Login</h1>
		<input type="text" name="email" placeholder="E-mail"></input>
		<input type="password" name="senha" placeholder="Senha"></input>
		<input type="submit" value="entrar"></input>
	</form>
</body>
</html>
