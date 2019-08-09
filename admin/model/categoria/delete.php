<?php

	include('../../class/Conexao.php');
	include('../../class/Categorias.php');

	$id = $_POST['id'];

	$usuario = Categorias::delete_category_news($conexao, $id);
	$usuario = Categorias::delete_category($conexao, $id);
	
	header("Location:/projeto/admin/view/categoria/list.php");
	
?>