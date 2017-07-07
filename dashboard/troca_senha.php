<?php 
	session_start();
	include_once("../login/seguranca.php");
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
      <section id="main-content">
        <section class="wrapper">
                        <div class="titulo-pagina">
  <span class="fa-stack fa-lg text-primary">
   <i class="fa fa-circle fa-stack-2x"></i> 
    <i class="fa fa-key fa-stack-1x fa-inverse"></i>
  </span>
  <h2 class="text-primary">Alterar Senha</h2>
</div>
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <div class="panel-body">
        <div class="position-center">
          <form action="" class="form-horizontal" role="form" autocomplete="off" method="post" accept-charset="iso-8859-1">
            <input type="hidden" name="id_usuario" value="152080341" />
            <div class="form-group">
              <label for="senha_atual" class="col-lg-2 col-sm-2 control-label">Senha atual</label>
              <div class="col-lg-5">
                <input type="password" class="form-control" name="senha_atual" />
              </div>
            </div>
            <div class="form-group">
              <label for="nova_senha" class="col-lg-2 col-sm-2 control-label">Nova senha</label>
              <div class="col-lg-5">
                <input type="password" class="form-control" name="nova_senha" />
                <p class="help-block">Mínimo de 6 caracteres</p>
              </div>
            </div>
            <div class="form-group">
              <label for="repita_senha" class="col-lg-2 col-sm-2 control-label">Repetir a nova senha</label>
              <div class="col-lg-5">
                <input type="password" class="form-control" name="repita_senha" />
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">
                <input type="submit" class="btn btn-info" value="Confirmar">
                <input type="button" class="btn" value="Cancelar">
              </div>
            </div>
          </form>       
          </div>
      </div>
    </section>
  </div>
</div>      
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
 </body>
 </html>