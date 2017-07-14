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
            <li class="active"><a href="../pautas/sobre_admin.php">Sobre</a></li>
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
    <div class="container">

      <div class="page-header">
        <h1>Sobre o Projeto</h1>
      </div>
      <p>O <b>PROJETO REPÓRTER JUNINO</b> foi lançado oficialmente em 3 de junho de 2005 pelos professores Fernando Firmino da Silva e Águeda Miranda Cabral para cobertura, na modalidade jornalismo digital, do São joão de Campina Grande e do Nordeste. Em 2017, chegamos aos <b>12 ANOS DO REPÓRTER JUNINO.</b> E essa décima segunda edição é coordenada pelos professores Fernando Firmino da Silva e Arão de Azevedo. Projeto de extensãodo Curso de Comunicação Social - Jornalismo da Universidade Estadual da Paraíba - UEPB, o <b>Repórter Junino</b> está na sua décima edição ininterrupta e surgiu de forma incipiente numa turma de 30 e poucos alunos de Novas Tecnologias da Comunicação do Departamento que buscava aliar teoria e prática do jornalismo mais a oportunidade de utilizar os festejos juninos como laboratório de produção. Em 2010, o projeto foi apontado como um dos mais antigos projetos e exemplo de laboratório de ensino e práticas de jornalismo digital no Brasil no livro "Mapeamento do Ensino do Jornalismo DIgital em 2010", publicado pelo Rumos Itaú Cultural.</p>

      </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
 </body>
 </html>