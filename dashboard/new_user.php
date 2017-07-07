<?php 
	session_start();
	include_once("../login/seguranca.php");
	include_once("../BD/BD.php");
	$dados = "SELECT * FROM usuario";
  $dados = $conecta->query($dados);
	$total = mysqli_num_rows($dados);
 ?>
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 	<title>Usuários</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/estilo.css">
 </head>
 <body class="body_user">
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Reporter Junino</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          	<li><a href="dashboard_admin.php">Pagina Inicial</a></li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuários<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="users.php">Usuários Cadastrados</a></li>
              <li><a href="new_user.php">Novo Usuário</a></li>
            </ul>
          </li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['usuarioNome']; ?> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="troca_senha.php">Alterar Senha</a></li>
                <li><a href="../login/sair.php">Sair</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container theme-showcase" role="main">
      <div class="page-header">
        <h1>Adicionar Novo Usuário</h1>
      </div>
        <form method="POST" action="../BD/insert.php">
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Nome:</label>
            <input type="text" name="nome" class="form-control" id="exampleInputEmail1" placeholder="Nome">
        </div>
        <div class="form-group col-md-8">
            <label for="exampleInputEmail1">Endereço de e-mail:</label>
            <input type="email" name ="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
          </div>
          <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Matricula:</label>
            <input type="password" name ="mat" class="form-control" id="exampleInputEmail1" placeholder="Matricula">
          </div>
          <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Nivel de Acesso:</label>
              <select class="form-control" name="size">
                <option value="1">Administrador</option>
                <option value="2">Editor</option>
                <option value="3">...</option>
              </select>
          </div>
          <div class="form-group col-md-4">
              <label for="exampleInputEmail1">Bolsista:</label>
              <select class="form-control" name="size">
                <option value="1">Sim</option>
                <option value="2">Não</option>
              </select>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-default" style="margin-right: 2%;">CADASTRAR</button>
            <button type="reset" class="btn btn-default">LIMPAR</button>
          </div>
        </form>
     </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/ma_oe.js"></script>
 </body>
 </html>