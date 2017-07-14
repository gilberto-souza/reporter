<?php 
	session_start();
	include_once('BD.php');

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$mat = $_POST['mat'];
	$nivel = $_POST['nivel'];
	$bol = $_POST['bol'];

	$sql = "SELECT * FROM usuario WHERE mat = ?";
	$query = $conect->prepare($sql);
	$query->bindparam("1", $mat);
	$query->execute();
	$result = $query->fetch(PDO::FETCH_ASSOC);

	if (!empty($result)) {
		$_SESSION['loginErro'] = "Matricula ja esta cadastrada no sistema do RPJ!";		
		header('Location:../dashboard/new_user.php');
	}else if ($nome == "" || $email == "" || $mat == "") {
		$_SESSION['loginErro'] = "Usuário não foi cadastrado. <br>Por favor verifique se todos os campos foram preenchidos.";
		header('Location:../dashboard/new_user.php');
	}else{
		$sql = "INSERT INTO usuario (nome, email, user, pass, nivel_acesso_ID, mat, bolsista) VALUES (?, ?, ?, ?, ?, ?, ?)";
		$query = $conect->prepare($sql);
		$query->bindparam('1',$nome);
		$query->bindparam('2',$email);
		$query->bindparam('3',$mat);
		$query->bindparam('4',$mat);
		$query->bindparam('5',$nivel);
		$query->bindparam('6',$mat);
		$query->bindparam('7',$bol);
		$query->execute();
		$_SESSION['loginErro'] = "Usuário Cadastrado com Sucesso.";
		header('Location:../dashboard/new_user.php');
	}
	
?>