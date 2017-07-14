<?php 
include_once("../BD/BD.php");
session_start();
$usuario = $_POST['user'];
$senha = $_POST['pass'];

$dados = "SELECT * FROM usuario WHERE user=? AND pass= ?";
$query = $conect->prepare($dados);
$query->bindparam("1", $usuario);
$query->bindparam("2", $senha);
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);

if (empty($result)) {
	//mensagem de erro
	$_SESSION['loginErro'] = "Usuário ou senha inválido";
	header("Location:../");
}else{
	//Define valor na sessao usuario e redireciona para a area administrativa
	$_SESSION['usuarioNome'] = $result['nome'];
	$_SESSION['mat'] = $result['mat'];
	$_SESSION['acesso'] = $result['nivel_acesso_ID'];
	if ($_SESSION['acesso']==1) {
		header("Location:../dashboard/dashboard_admin.php");
	}else{
		header("Location:../dash_user/dashboard.php");
	}
}

 ?>