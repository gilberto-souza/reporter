<?php 
include_once("../BD/BD.php");
session_start();

$mat = $_POST['mat'];
$_SESSION['matri'] = $mat;

$dados = "SELECT * FROM usuario WHERE mat='$mat'";
$dados = $conecta->query($dados);
$total = mysqli_num_rows($dados);

if (empty($total)) {
	//mensagem de erro
	$_SESSION['loginErro'] = "Matricula não encontrada no sistema";
	header("location:troca_senha.php");
}else{
	//Ir pra tela de trocar a senha
	header("location:alterando.php");
	
}

 ?>