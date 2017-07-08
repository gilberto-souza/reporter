<?php 

	include_once('../BD/BD.php');
	session_start();
	$atual = $_POST['atual'];
	$senha1 = $_POST['senha1'];
	$senha2 = $_POST['senha2'];
	$mat = $_SESSION['mat'];
	$sql = "SELECT * FROM usuario WHERE mat = '$mat'";
	$query = $conecta->query($sql);
	$result = mysqli_fetch_assoc($query);

	if ($atual!=$result['pass']) {
		$_SESSION['loginErro'] = "Senha Atual incorreta!";
		header('Location:../dashboard/troca_senha.php');
	}else if ($senha1!=$senha2 || $senha1=="") {
		$_SESSION['loginErro'] = "Senhas não Correspondem!";
		header('Location:../dashboard/troca_senha.php');
	}else{
		$sql = "UPDATE usuario SET pass = '$senha1' WHERE mat = '$mat'";
		$query = $conecta->query($sql);
		$_SESSION['loginErro'] = "Senha Alterada com Sucesso!";
		header('Location:../dashboard/troca_senha.php');
	}

 ?>