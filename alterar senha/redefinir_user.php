<?php 

	include_once('../BD/BD.php');
	session_start();
	$atual = $_POST['atual'];
	$senha1 = $_POST['senha1'];
	$senha2 = $_POST['senha2'];
	$mat = $_SESSION['mat'];
	$sql = "SELECT * FROM usuario WHERE mat = ?";
	$query = $conect->prepare($sql);
	$query->bindparam("1",$mat);
	$query->execute();
	$result = $query->fetch(PDO::FETCH_ASSOC);

	if ($atual!=$result['pass']) {
		$_SESSION['loginErro'] = "Senha Atual incorreta!";
		header('Location:../dashboard/troca_senha.php');
	}else if ($senha1!=$senha2 || $senha1=="") {
		$_SESSION['loginErro'] = "Senhas não Correspondem!";
		header('Location:../dashboard/troca_senha.php');
	}else{
		$sql = "UPDATE usuario SET pass = ?  WHERE mat = ?";
		$query = $conect->prepare($sql);
		$query->bindparam('1',$senha2);
		$query->bindparam('2',$mat);
		$query->execute();
		$_SESSION['loginErro'] = "Senha Alterada com Sucesso!";
		header('Location:../dash_user/troca_senha.php');
	}

 ?>