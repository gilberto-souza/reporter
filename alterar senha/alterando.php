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
	<form action="alterar_senha_BD.php" class="form-Login text-center" method="POST">
		<img src="../imagens/logo.png" class="img-responsive img-circle center-block" height="200" width="200" style="padding-top: 15%;">
		<h4 class="form-Login-Heading"><b>Digite a sua senha</b></h4>
		<input type="password" name="senha1" class="form-control" placeholder="Senha" required autofocus>
		<input type="password" name="senha2" class="form-control" placeholder="Repita a Senha" required autofocus>
		<button type="submit" class="btn btn-lg btn-primary btn-block">Alterar</button>
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