<?php

	include('../../class/Conexao.php');
	include('../../class/Categorias.php');

	$categoria = $_POST['categoria'];

	$c = new Categorias($conexao, $categoria);

	$c->insert($conexao, $categoria);	

	header("Location:/projeto/admin/view/categoria/insert.php");
	
?>