<?
include db.php;

global $login;
global $senha1;
$login= $_POST['login'];
$senha1 = $_POST['senha1'];
//faz a confirmação de nome e senha no db
$logar = mysql_query("SELECT * FROM pessoa WHERE login='$login' AND senha='$senha1' AND usuario_Nivel='1'") or die("erro ao selecionar");
/*aqui depois de verificado redirecionamos a pagina secreta(caso nome e senha estarem corretos) ou senha
e apelido não conferem caso tais estiverem errados. Repare que há uma rotina para o valor inserido em senha não seja nulo.

obs: Aonde esta escrito paginasecreta.php é aonde vc deve colocar a página para onde o script ira redirecionar*/
if (strlen($senha1)< 1)

echo "Senha ou apelido não confere tente denovo";
session_start("login");
//session_destroy();

elseif (mysql_num_rows($logar)>0 ){
setcookie("senha", "$senha1");
header("location: menu.php");

} else {
 echo "
Senha ou apelido não conferem
<a href=\"secAcess.php\">tente de novo</a>

";
}


?