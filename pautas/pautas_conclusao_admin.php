<?php 
	session_start();
	include_once("../login/seguranca.php");
	include_once("../BD/BD.php");
  $id = 2;
  $sql = "SELECT * FROM pautas WHERE terminou=?";
  $query = $conect->prepare($sql);
  $query->bindparam('1',$id);
  $query->execute();
  $total = $query->rowCount(); 
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
        <h1>Pautas Finalizadas</h1>
      </div>
      <div class="container">
      <!-- Example row of columns -->
      <div class="row">
      <?php if ($total>0) {
        while($pauta = $query->fetch(PDO::FETCH_ASSOC)){ ?>
        <div class="col-md-4">
          <h2><?php echo $pauta['titulo']; ?></h2>
          <p><?php echo $pauta['descricao']; ?></p>
          <p><a class="btn btn-default" href="pautas_visualizar_admin.php?id=<?php echo $pauta['id']; ?>" role="button">View details &raquo;</a></p>
        </div>
        <?php }} ?>
      </div>
     </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
 </body>
 </html>