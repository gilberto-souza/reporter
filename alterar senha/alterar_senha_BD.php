<?php 
	
	include_once('../BD/BD.php');
	session_start();
	$senha1 = $_POST['senha1'];
	$senha2 = $_POST['senha2'];
	$mat = $_SESSION['matri'];
	if ($senha1==$senha2 and $senha1!="") {
		$sql = "UPDATE usuario SET pass = '$senha1' WHERE mat = '$mat'";
		$query = $conecta->query($sql);
		$_SESSION['loginErro'] = "Senha Alterada com Sucesso";
		session_destroy();
		header('Location:../');
	}else{
		$_SESSION['loginErro'] = "Senhas não correspondem.";
		header("location:alterando.php");
	}

 ?>