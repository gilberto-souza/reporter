<?php 

	include_once('BD.php');
	$id = $_REQUEST['id'];
	$sql = "DELETE FROM `usuario` WHERE `usuario`.`id` = ?";
	$query = $conect->prepare($sql);
	$query->bindparam("1", $id);
	$query->execute();
	header('Location:../dashboard/users.php');

 ?>