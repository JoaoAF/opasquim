<?php

	include('../../class/Conexao.php');
	include('../../class/Categorias.php');

	$id    		= $_POST['id'];
	$categoria  = $_POST['categoria'];

	$categoria = new Categorias($categoria);

	$categoria->edit($conexao, $id);
	
	header("Location:/projeto/admin/view/categoria/list.php");
	
?>