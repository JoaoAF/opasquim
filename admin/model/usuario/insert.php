<?php

	include('../../class/Conexao.php');
	include('../../class/Usuarios.php');

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$user = new Usuarios($nome, $email, $senha);

	$user->insert($conexao);

	header("Location:/projeto/admin/view/usuario/list.php");
	
?>