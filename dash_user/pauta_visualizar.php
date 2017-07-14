<?php 
	 session_start();
  include_once("../login/seguranca2.php");
  include_once("../BD/BD.php");
  $acesso=$_SESSION['acesso'];
  $id = $_REQUEST['id'];

  $sql = "SELECT * FROM pautas WHERE terminou=?";
  $query = $conect->prepare($sql);
  $query->bindparam('1',$id);
  $query->execute();
  $pauta = $query->fetch(PDO::FETCH_ASSOC);

  $editor_id = $pauta['editor'];
  $editor = "SELECT * FROM usuario WHERE mat=?";
  $editor = $conect->prepare($editor);
  $editor->bindparam('1',$editor_id);
  $editor->execute();
  $editor = $editor->fetch(PDO::FETCH_ASSOC);

  $fotografo_id = $pauta['fotografo'];
  $fotografo = "SELECT * FROM usuario WHERE mat=?";
  $fotografo = $conect->prepare($fotografo);
  $fotografo->bindparam('1',$fotografo_id);
  $fotografo->execute();
  $fotografo = $fotografo->fetch(PDO::FETCH_ASSOC);

  $reporter_id = $pauta['reporter'];
  $reporter = "SELECT * FROM usuario WHERE mat=?";
  $reporter = $conect->prepare($reporter);
  $reporter->bindparam('1',$reporter_id);
  $reporter->execute();
  $reporter = $reporter->fetch(PDO::FETCH_ASSOC);
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
          	<li><a href="dashboard.php">Pagina Inicial</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pautas<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="pauta_finalizadas.php">Pautas Finalizadas</a></li>
              <li><a href="pauta_conclusao.php">Pautas em conclusão</a></li>
            </ul>
          </li>
            <li><a href="sobre.php">Sobre</a></li>
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
        <h1><?php echo $pauta['titulo']; ?></h1>
      </div>
      <div class="col-md-12">
        <h3>Tema: <?php echo $pauta['tema']; ?></h3>
      </div>
      <div class="col-md-12" style="padding-top: 2%;">
        <h4>Descrição:</h4>
        <p><?php echo $pauta['descricao']; ?></p>
      </div>      
      <div class="col-md-4">
          <h2>Editor:</h2>
          <p><?php echo $editor['nome']; ?></p>
      </div> 
      <div class="col-md-4">
          <h2>Fotógrafo:</h2>
          <p><?php echo $fotografo['nome']; ?></p>
      </div>
      <div class="col-md-4">
          <h2>Repórter:</h2>
          <p><?php echo $reporter['nome']; ?></p>
        </div>   
     </div>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
 </body>
 </html>