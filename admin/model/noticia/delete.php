<?php

	include('../../class/Conexao.php');
	include('../../class/Noticias.php');

	$id = $_POST['id'];

	$usuario = Noticias::delete($conexao, $id);

	header("Location:/projeto/admin/view/noticia/list.php");
	
?>