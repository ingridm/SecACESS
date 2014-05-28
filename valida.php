<?php

// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)

if (!empty($_POST) AND (empty($_POST['login']) OR empty($_POST['senha']))) {
  header("Location: index.html"); 
  exit;

mysql_connect('localhost', 'root', '') or trigger_error(mysql_error());
mysql_select_db('pessoa') or trigger_error(mysql_error());

$login = mysql_real_escape_string($_POST['login']);
$senha = mysql_real_escape_string($_POST['senha']);


//$sql = "SELECT `id`, `nome`, `nivel` FROM `usuarios` WHERE (`usuario` = '". $login ."') AND (`senha` = '". sha1($senha) ."') AND (`ativo` = 1) LIMIT 1";

$sql =" SELECT `nome`, `rg`, `email`, `veiculo`, `senha`, `id_Usuario`, `login`, `usuario_Nivel`, `cpf`, `status`, `moradia`, `foto` FROM `pessoa` WHERE (`login` = `".$login."`) AND (`senha` = `". sha1($senha) ."`) AND (`status` =1) LIMIT 1";
$query = mysql_query($sql);

if (mysql_num_rows($query) != 1) {
   // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado

    echo "Login inválido!"; exit;
} else {

    // Salva os dados encontados na variável $resultado

    $resultado = mysql_fetch_assoc($query);
	// Se a sessão não existir, inicia uma
    if (!isset($_SESSION)) session_start();
    // Salva os dados encontrados na sessão

    $_SESSION['id'] = $resultado['id'];

    $_SESSION['login'] = $resultado['login'];

    $_SESSION['usuario_Nivel'] = $resultado['usuario_Nivel'];

 

    // Redireciona o visitante

   header("Location: restrita.php");
   exit;

}
}

?>
