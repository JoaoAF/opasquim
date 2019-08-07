<?php

	include('../../class/Conexao.php');
	include('../../class/Usuarios.php');

	$id    = $_POST['id'];
	$nome  = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$usuario = Usuarios::search_user($conexao, $id);

	if($usuario['senha'] == $senha){
		$senha = $senha;
	}else{
		$senha = md5($senha);
	}

	$user = new Usuarios($nome, $email, $senha);

	if ($user->edit($conexao, $id, $nome, $email, $senha)) {
		echo "Deu certo";
	}else{
		echo "Deu Não";
	}

	header("Location:/projeto/admin/view/usuario/list.php");
	
?>