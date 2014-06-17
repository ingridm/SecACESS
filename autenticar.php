<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "secacess";
	$conexao = mysql_connect($host, $user, $pass) or die(mysql_error()) ;
	mysql_select_db($banco) or die (mysql_error());
 ?>
 

<html>
<head>
	<link rel HREF="estilo.css" TYPE="text/css">
	<title>Autenticando</title>
	
		<script type="text/javascript" >
		function loginsuccessfully() {
		setTimeout("window.location='menu.html' ", 1000);
	}
	function loginfailed(){
		setTimeout("window.location='secAcess.html' ", 1000);
	}
	</script>
	
</head>
	<body>
<?php 
	$login=$_POST['login'];
	$senha=$_POST['senha'];
	$sql = mysql_query("SELECT * FROM pessoa WHERE login = '$login' and senha = '$senha'") or die(mysql_error());
	$row = mysql_num_rows($sql);
	
		if($row > 0) {
		if (
		session_start();
		$_SESSION['login']=$_POST['login'];
		$_SESSION['senha']=$_POST['senha'];
		// echo "<script>alert('Logado com sucesso!')</script>";
		echo "<script>loginsuccessfully()</script>";
		
	}else{
		echo "<script>alert('E-mail e Senha Incorreto!')</script>";
		echo "<script>loginfailed()</script>";
	}
	
	
?>

	</body>
</html>
