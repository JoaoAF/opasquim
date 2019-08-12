<?php
	error_reporting(E_ALL);
	
	include('../../class/Conexao.php');
	include('../../class/Noticias.php');

	ini_set('upload_max_filesize', '64M');
	ini_set('post_max_size', '64M');

	if (!isset($_SESSION)) session_start();

	$titulo		= $_POST['titulo'];
	$subtitulo	= $_POST['subtitulo'];
	$tags		= $_POST['tags'];
	$categoria  = $_POST['categoria'];
	$videos  	= $_POST['video'];
	
	$texto		= str_replace("\"","\'", $_POST['texto']);

	$usuario 	= '0';
	$datahora 	= date("Y-m-d H:i:s");
	
	if(isset($_SESSION['UsuarioID'])): $usuario = $_SESSION['UsuarioID']; endif;
	
	if(!empty($_FILES['imagem']['tmp_name']) ){

		$destino = getcwd()."/../../../img/noticias/";
		$destinoBD = "img/noticias/";

		$ext = strtolower(substr($_FILES['imagem']['name'],-4));
	    $novo_nome_img = date("Y.m.d-H.i.s") . $ext; 
	    move_uploaded_file($_FILES['imagem']['tmp_name'], $destino.$novo_nome_img); 
		
		$imagens = $destinoBD.$novo_nome_img;

		$noticia = new Noticias($titulo, $subtitulo, $texto, $imagens, $videos, $tags, $categoria, $usuario, $datahora);

		if (!$noticia->insert($conexao)) {
			header("Location:/projeto/admin/view/noticia/list.php");
		}else{
			echo "Deu ruim ao inserir";
		}
		
	}else{
		echo "Deu ruim";
	}
?>