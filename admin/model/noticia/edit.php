<?php

	include('../../class/Conexao.php');
	include('../../class/Noticias.php');

	$id 		= $_POST['id'];
	$titulo		= $_POST['titulo'];
	$subtitulo	= $_POST['subtitulo'];
	$texto		= $_POST['texto'];
	$tags		= $_POST['tags'];
	$categoria  = $_POST['categoria'];

	$noticia_atual = Noticias::search_news($conexao, $id);

	$destino = getcwd()."/../../../img/noticias/";

	if(!empty($_FILES['imagem']['tmp_name'])){

		$ext = strtolower(substr($_FILES['imagem']['name'],-4));
	    $novo_nome_img = str_replace(" ", "_", $titulo)."_".date("Y.m.d-H.i.s").$ext; 
	    move_uploaded_file($_FILES['imagem']['tmp_name'], $destino.$novo_nome_img); 
		$imagens = $destino.$novo_nome_img;
	}

	if(!empty($_FILES['video']['tmp_name']) ){

		$videos = $destino.$novo_nome_video;
    	$ext = strtolower(substr($_FILES['video']['name'],-4));
    	$novo_nome_video = str_replace(" ", "_", $subtitulo)."_".date("Y.m.d-H.i.s").$ext; 
    	move_uploaded_file($_FILES['video']['tmp_name'], $destino.$novo_nome_video);
	}


	if(empty($_FILES['video']['tmp_name']) ){$videos = 'Sem video';}

	if(empty($_FILES['imagem']['tmp_name']) ){$imagens = $noticia_atual['imagens'];}

	$noticia = new Noticias($titulo, $subtitulo, $texto, $imagens, $videos, $tags, $categoria);
	print_r($noticia);

	$noticia->edit($conexao, $id);

	header("Location:/projeto/admin/view/noticia/list.php");

?>