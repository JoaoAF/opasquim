<?php

	include('../../class/Conexao.php');
	include('../../class/Usuarios.php');

	$id = $_POST['id'];

	$usuario = Usuarios::delete($conexao, $id);

	header("Location:/projeto/admin/view/usuario/list.php");
	
?>