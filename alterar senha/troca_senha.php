<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Esqueceu a senha</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
	<div class="login">
	<form action="alterar_senha.php" class="form-Login text-center" method="POST">
		<img src="../imagens/logo.png" class="img-responsive img-circle center-block" height="200" width="200" style="padding-top: 20%;">
		<h4 class="form-Login-Heading"><b>Digite a sua matricula</b></h4>
		<input type="text" name="mat" class="form-control" placeholder="Matricula" required autofocus>
		<button type="submit" class="btn btn-lg btn-primary btn-block">Continuar</button>
	</form>
		<p class="text-center text-danger">
			<?php
				if(isset($_SESSION['loginErro'])){
					echo $_SESSION['loginErro'];
					unset($_SESSION['loginErro']);
				}
			?>
		</p>
    </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>