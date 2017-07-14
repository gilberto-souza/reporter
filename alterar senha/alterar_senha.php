<?php 
include_once("../BD/BD.php");
session_start();

$mat = $_POST['mat'];
$_SESSION['matri'] = $mat;

$dados = "SELECT * FROM usuario WHERE mat=?";
$query = $conect->prepare($dados);
$query->bindparam("1", $mat);
$query->execute();
$total = $query->fetch(PDO::FETCH_ASSOC);

if (empty($total)) {
	//mensagem de erro
	$_SESSION['loginErro'] = "Matricula não encontrada no sistema";
	header("location:troca_senha.php");
}else{
	//Ir pra tela de trocar a senha
	header("location:alterando.php");
	
}
*/
 ?>