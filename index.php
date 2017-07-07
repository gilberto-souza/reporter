<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<?php
		unset($_SESSION['usuarioNome']);
	?>
	<div class="login">
	<form action="login/valida_login.php" class="form-Login text-center" method="POST">
		<img src="imagens/logo.png" class="img-responsive img-circle center-block" height="200" width="200" style="padding-top: 10%;">
		<h4 class="form-Login-Heading"><b>RPJ</b></h4>
		<input type="text" name="user" class="form-control" placeholder="Email" required autofocus>
		<input type="password" name="pass" class="form-control" placeholder="Senha" required>
		<a href="alterar senha/troca_senha.php">Esqueceu a senha?</a>
		<button type="submit" class="btn btn-lg btn-primary btn-block">Entrar</button>
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
	<script src="js/bootstrap.min.js"></script>
</body>
</html>