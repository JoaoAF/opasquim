<?php
	
	if (!isset($_SESSION)): session_start(); endif;

	include('../../class/Conexao.php');
	include('../../class/Usuarios.php');

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$user = new Usuarios($nome, $email, $senha);

	if (isset($_SESSION['UsuarioNivel']) and $_SESSION['UsuarioNivel'] == 'administrador') :
		$user->insert($conexao);
		header("Location:/projeto/admin/view/usuario/list.php");
	endif;

	if (isset($_SESSION['UsuarioNivel']) and $_SESSION['UsuarioNivel'] != 'administrador') :
		header("Location:/projeto/admin/view/usuario/login.php");
	endif;

	
?>