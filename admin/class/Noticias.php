<?php

	Class Noticias{

		private $titulo;
		private $subtitulo;
		private $texto;
		private $imagens;
		private $videos;
		private $tags;
		private $categoria;

		function __construct($titulo, $subtitulo, $texto, $imagens, $videos, $tags, $categoria){

			$this->titulo	 = $titulo;
			$this->subtitulo = $subtitulo;
			$this->texto 	 = $texto;
			$this->imagens 	 = $imagens;
			$this->videos 	 = $videos;
			$this->tags 	 = $tags;
			$this->categoria = $categoria;

		}	

		public function insert($conexao){

			$query = "insert into noticias(titulo, subtitulo, texto, imagens, videos, tags, id_categoria) values('{$this->titulo}', '{$this->subtitulo}', '{$this->texto}', '{$this->imagens}', '{$this->videos}', '{$this->tags}', '{$this->categoria}')";

			if (mysqli_query($conexao, $query) == false) : 

				echo "Deu errado " . mysqli_error($conexao); 

			endif;
		}

	}

?>