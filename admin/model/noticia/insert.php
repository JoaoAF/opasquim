<?php

	include('../../class/Conexao.php');
	include('../../class/Noticias.php');

	$titulo		= $_POST['titulo'];
	$subtitulo	= $_POST['subtitulo'];
	$texto		= $_POST['texto'];
	$imagens	= $_POST['imagem'];
	$videos		= $_POST['video'];
	$tags		= $_POST['tags'];
	$categoria  = $_POST['categoria'];

	$noticia 	= new Noticias($titulo, $subtitulo, $texto, $imagens, $videos, $tags, $categoria);

	print_r($noticia);

	if ($noticia->insert($conexao)) {
		echo "Deu certo";
	}else{
		echo "Deu bode";
	}

?>