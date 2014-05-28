<html>
<?php

// A sessão precisa ser iniciada em cada página diferente

if (!isset($_SESSION)) session_start();
$nivel_necessario = 2;
// Verifica se não há a variável da sessão que identifica o usuário

if (!isset($_SESSION['id']) OR ($_SESSION['usuario_Nivel'] < $nivel_necessario)) {

    // Destrói a sessão por segurança

    session_destroy();

    // Redireciona o visitante de volta pro login

    header("Location: secAcess.php"); exit;
	
	
		

}
</html>
?>
