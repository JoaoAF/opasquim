<?php
	error_reporting(E_ALL);
	
	include('../../class/Conexao.php');
	include('../../class/Noticias.php');


	if (!isset($_SESSION)) session_start();

	$titulo		= $_POST['titulo'];
	$subtitulo	= $_POST['subtitulo'];
	$texto		= $_POST['texto'];
	$tags		= $_POST['tags'];
	$categoria  = $_POST['categoria'];
	
	$usuario 	= '0';
	$datahora 	= date("Y-m-d H:i:s");
	
	if(isset($_SESSION['UsuarioID'])): $usuario = $_SESSION['UsuarioID']; endif;
	
	if(!empty($_FILES['imagem']['tmp_name']) ){

		$destino = getcwd()."/../../../img/noticias/";
		$destinoBD = "img/noticias/";

		$ext = strtolower(substr($_FILES['imagem']['name'],-4));
	    $novo_nome_img = date("Y.m.d-H.i.s") . $ext; 
	    move_uploaded_file($_FILES['imagem']['tmp_name'], $destino.$novo_nome_img); 

	    $ext = strtolower(substr($_FILES['video']['name'],-4));
	    $novo_nome_video = date("Y.m.d-H.i.s") . $ext; 
	    move_uploaded_file($_FILES['video']['tmp_name'], $destino.$novo_nome_video);
		
		$imagens = $destinoBD.$novo_nome_img;

		if(!empty($_FILES['video']['tmp_name']) ){$videos = $destinoBD.$novo_nome_video;}
		if(empty($_FILES['video']['tmp_name']) ){$videos = 'Sem video';}


		$noticia = new Noticias($titulo, $subtitulo, $texto, $imagens, $videos, $tags, $categoria, $usuario, $datahora);

		if (!$noticia->insert($conexao)) {
			header("Location:/projeto/admin/view/noticia/list.php");
		}else{
			echo "Deu ruim ao inserir";
			print_r($noticia);
		}
		
	}else{
		echo "Deu ruim";
	}
?>