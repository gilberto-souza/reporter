<?php 

	ob_start();
	if ($_SESSION['usuarioNome'] == "" || $_SESSION['acesso']!=1) {
		$_SESSION['loginErro'] = "Área restrita para usuários logados";

		header('Location:../');
	}

 ?>