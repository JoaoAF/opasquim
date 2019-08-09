<?php

	include('../../class/Conexao.php');
	include('../../class/Usuarios.php');

	$id = $_POST['id'];
	$permissao = $_POST['permissao'];
	
	$usuario = Usuarios::alter_permission($conexao, $permissao, $id);

	header("Location:/projeto/admin/view/usuario/permissoes.php");
	
?>