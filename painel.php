<?php 
	include 'db.php';
?>
<?php 
 	session_start();
 	if(!isset($_SESSION["login"]) || !isset($_SESSION["senha"])) {
 		header("Location: login.php");
 	}

?>

<html>
<head>
	<title>Administrativo</title>
	<href src ="menu.html">
</head>
<body>
<?php
echo ($_SESSION["login"])."\n";
?>
<a href="logout.php">Sair</a>

</body>
</html>
