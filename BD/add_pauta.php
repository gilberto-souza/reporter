<?php 
	
	include_once('BD.php');
	$tema = $_POST['tema'];
	$titulo = $_POST['titulo'];
	$descri = $_POST['descri'];
	$id = 1;
	$sql = $conect->prepare("INSERT INTO pautas (titulo, descricao, tema,terminou) VALUES (?, ?, ?, ?)");
	$sql->bindparam('1',$titulo);
	$sql->bindparam('2',$descri);
	$sql->bindparam('3',$tema);
	$sql->bindparam('4',$id);
	$sql->execute();
	header('Location:../pautas/add_pauta_admin.php');
 ?>