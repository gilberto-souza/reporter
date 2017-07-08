<?php 
	session_start();
	include_once('BD.php');

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$mat = $_POST['mat'];
	$nivel = $_POST['nivel'];
	$bol = $_POST['bol'];

	$sql = "SELECT * FROM usuario WHERE mat = '$mat'";
	$query = $conecta->query($sql);
	$result = mysqli_fetch_assoc($query);

	if (!empty($result)) {
		$_SESSION['loginErro'] = "Matricula ja esta cadastrada no sistema do RPJ!";		
		header('Location:../dashboard/new_user.php');
	}else if ($nome == "" || $email == "" || $mat == "") {
		$_SESSION['loginErro'] = "Usuário não foi cadastrado. <br>Por favor verifique se todos os campos foram preenchidos.";
		header('Location:../dashboard/new_user.php');
	}else{
		$sql = "INSERT INTO usuario SET nome = '$nome', email='$email', user='$nome', pass='$mat', nivel_acesso_ID ='$nivel', mat = '$mat', bolsista='$bol'";
		$query = $conecta->query($sql);
		$_SESSION['loginErro'] = "Usuário Cadastrado com Sucesso.";
		header('Location:../dashboard/new_user.php');
	}
	
?>