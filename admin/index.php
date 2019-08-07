<?php if (!isset($_SESSION)) session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Portal | Administração</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php if (isset($_SESSION['UsuarioID'])): ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">O Pasquim</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $_SESSION['UsuarioNome'] ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          
          <a class="dropdown-item" href="view/usuario/info.php">Informações Pessoais</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="model/usuario/logout.php">Sair</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cadastrar
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php if($_SESSION['UsuarioNivel'] == "administrador") : ?>
            
            <a class="dropdown-item" href="view/usuario/insert.php">Usuario</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="view/categoria/insert.php">Categoria</a>
            <div class="dropdown-divider"></div>
          
          <?php endif; ?>
          <a class="dropdown-item" href="view/noticia/insert.php">Notícia</a>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Listar
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          
          <a class="dropdown-item" href="view/usuario/list.php">Usuarios</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="view/categoria/list.php">Categorias</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="view/noticia/list.php">Notícias</a>
          
        </div>
      </li>
    </ul>

  </div>
</nav>
<?php endif; ?>
<section>
	<div class="jumbotron">
		<h1 class="display-4">Seja muito bem vindo</h1>
		<p class="lead">Aqui é a parte administrativa do portal de notícias, a depender do seu nivel de permissão você tera acesso a tudo por aqui.</p>
		<hr class="my-4">
		<p>Se você já é membro cadastrado faça o login para ter acesso as funções do site, se ainda não tiver cadastro clique em cadastre-se.</p>
		<a class="btn btn-info btn-suc btn-lg" href="view/usuario/login.php" role="button">Login</a>
		<a class="btn btn-info btn-primary btn-lg" href="view/usuario/insert.php" role="button">Cadrastre-se</a>
	</div>
</section>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>