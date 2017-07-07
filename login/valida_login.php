<?php 
include_once("../BD/BD.php");
session_start();
$usuario = $_POST['user'];
$senha = $_POST['pass'];
$sql = "SELECT * FROM usuario WHERE user = '$usuario' AND pass='$senha'";
$query = $conecta->query($sql);
$result = mysqli_fetch_assoc($query);

if (empty($result)) {
	//mensagem de erro
	$_SESSION['loginErro'] = "Usuário ou senha inválido";
	header("Location:../");
}else{
	//Define valor na sessao usuario e redireciona para a area administrativa
	$_SESSION['usuarioNome'] = $result['nome'];
	$_SESSION['acesso'] = $result['nivel_acesso_ID'];	
	if ($_SESSION['acesso']==1) {
		header("Location:../dashboard/dashboard_admin.php");
	}else{
		echo "membro";
	}
}

 ?>