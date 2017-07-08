<?php 

	include_once('BD.php');
	$id = $_REQUEST['id'];
	$sql = "DELETE FROM `usuario` WHERE `usuario`.`id` = '$id'";
	$query = $conecta->query($sql);
	header('Location:../dashboard/users.php');
 ?>