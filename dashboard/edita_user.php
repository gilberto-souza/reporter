<?php 
	session_start();
	include_once("../login/seguranca.php");
	include_once("../BD/BD.php");
  $id = $_REQUEST['id'];
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
        <h1>Usuários Cadastrados</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Nome</th>
                <th>email</th>
                <th>Usuário</th>
                <th>Nivel de Acesso</th>
                <th>Bolsista</th>
                <th>Matricula</th>                
                <th>Editar</th>
                <th>Apagar</th>
              </tr>
            </thead>
            <tbody>            
            <?php if ($total>0) {
            	while($linha = mysqli_fetch_assoc($dados)){ ?>
      				<tr>
      					<td><?php echo $linha['id'];?></td>
      					<td><?php echo $linha['nome'];?></td>
      					<td><?php echo $linha['email'];?></td>
      					<td><?php echo $linha['user'];?></td>
      					<td><?php echo $linha['nivel_acesso_ID'];?></td>					
      					<td><?php if($linha['bolsista']==1){echo "SIM";}else{echo "NÃO";}?></td>
      					<td><?php echo $linha['mat'];?></td>
      					<td><a href="edita_user.php?id=<?php echo $linha['id'];?>"><img src="../imagens/editar.png" alt=""></a></td>
      					<td><a href="../BD/delete.php?id=<?php echo $linha['id'];?>"><img src="../imagens/apagar.png" alt=""></a></td>
      					<?php }} ?>
      				</tr>
            </tbody>
          </table>
        </div>
     </div>
     </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
 </body>
 </html>