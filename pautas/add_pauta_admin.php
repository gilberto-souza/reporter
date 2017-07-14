<?php 
	session_start();
	include_once("../login/seguranca.php");
 ?>
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 	<title>Repórter Junino</title>
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
          <a class="navbar-brand" href="#">Repórter Junino</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          	<li><a href="../dashboard/dashboard_admin.php">Pagina Inicial</a></li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuários<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="../dashboard/users.php">Usuários Cadastrados</a></li>
              <li><a href="../dashboard/new_user.php">Novo Usuário</a></li>
            </ul>
          </li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pautas<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="../pautas/add_pauta_admin.php">Adicionar Pautas</a></li>
              <li><a href="../pautas/pautas_finalizadas_admin.php">Pautas Finalizadas</a></li>
              <li><a href="../pautas/pautas_conclusao_admin.php">Pautas em conclusão</a></li>
            </ul>
          </li>
            <li><a href="../pautas/sobre_admin.php">Sobre</a></li>
            <li class="dropdown">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['usuarioNome']; ?> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../dashboard/troca_senha.php">Alterar Senha</a></li>
                <li><a href="../login/sair.php">Sair</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
        <div class="container theme-showcase" role="main">
      <div class="page-header">
        <h1>Adicionar Nova Pauta</h1>
      </div>
          <form class="form-horizontal" method="POST" action="../BD/add_pauta.php">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Titulo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="titulo" placeholder="Titulo">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Tema</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="tema" placeholder="Tema">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Descrição</label>
            <div class="col-sm-10">
              <textarea class="form-control" rows="3" name="descri" placeholder="Descrição"></textarea>
            </div>
          </div>
          <div class="form-group text-center">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Adicionar</button>
              <button type="reset" class="btn btn-primary" style="margin-right: 5%;">Limpar</button>
            </div>
          </div>
        </form>
     </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
 </body>
 </html>