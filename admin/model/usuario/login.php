<?php

	include('../../class/Conexao.php');
	include('../../class/Usuarios.php');

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$user = Usuarios::login($conexao, $email, $senha);

	if($user){
		
		if (!isset($_SESSION)): 

			session_start();
			$_SESSION['UsuarioID'] = $user['id'];
			$_SESSION['UsuarioNome'] = $user['nome'];
			$_SESSION['UsuarioNivel'] = $user['nivel_permissao'];

		endif;

		header("Location:../../index.php");

	}else{
		echo "Deu não";
	}

?>