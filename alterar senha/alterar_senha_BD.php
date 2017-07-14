<?php 
	
	include_once('../BD/BD.php');
	session_start();
	$senha1 = $_POST['senha1'];
	$senha2 = $_POST['senha2'];
	$mat = $_SESSION['matri'];
	if ($senha1==$senha2 and $senha1!="") {
		$sql = "UPDATE usuario SET pass = ?  WHERE mat = ?";
		$query = $conect->prepare($sql);
		$query->bindparam('1',$senha1);
		$query->bindparam('2',$mat);
		$query->execute();
		$_SESSION['loginErro'] = "Senha Alterada com Sucesso";
		header('Location:../');
	}else{
		$_SESSION['loginErro'] = "Senhas não correspondem.";
		header("location:alterando.php");
	}

 ?>