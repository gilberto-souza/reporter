<?php 

	include_once('BD.php');
	$id = $_REQUEST['id'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$mat = $_POST['mat'];
	$nivel = $_POST['nivel'];
	$bol = $_POST['bol'];

	$sql = "UPDATE usuario SET nome = ?, email = ?,mat = ?, bolsista = ?, nivel_acesso_ID = ? WHERE id = ?";
	$query = $conect->prepare($sql);
	$query->bindparam('1',$nome);
	$query->bindparam('2',$email);
	$query->bindparam('3',$mat);
	$query->bindparam('4',$bol);
	$query->bindparam('5',$nivel);
	$query->bindparam('6',$id);
	$query->execute();

	header('Location:../dashboard/users.php')

 ?>