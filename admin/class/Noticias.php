<?php

	Class Noticias{

		private $titulo;
		private $subtitulo;
		private $texto;
		private $imagens;
		private $videos;
		private $tags;
		private $categoria;

		function __construct($titulo, $subtitulo, $texto, $imagens, $videos, $tags, $categoria, $usuario, $datahora){

			$this->titulo	 = $titulo;
			$this->subtitulo = $subtitulo;
			$this->texto 	 = $texto;
			$this->imagens 	 = $imagens;
			$this->videos 	 = $videos;
			$this->tags 	 = $tags;
			$this->categoria = $categoria;
			$this->usuario   = $usuario;
			$this->datahora  = $datahora;
		}	

		public function insert($conexao){

			$query = "insert into noticias(titulo, subtitulo, texto, imagens, videos, tags, id_categoria, id_usuario, datahora) values('{$this->titulo}', '{$this->subtitulo}', '{$this->texto}', '{$this->imagens}', '{$this->videos}', '{$this->tags}', '{$this->categoria}', {$this->usuario}, '{$this->datahora}')";

			if (mysqli_query($conexao, $query) == false) : 

				echo "Deu errado " . mysqli_error($conexao); 

			endif;
		}

		public function search($conexao){

			$news = [];
			$query = "select * from noticias";

			$result = mysqli_query($conexao, $query);
		
			while($n = mysqli_fetch_assoc($result)):
				array_push($news, $n);
			endwhile;

			return $news;
		}

		public static function list($conexao){

			$noticias = [];
			$query = "select n.id, n.titulo, c.categoria, n.datahora, u.nome from noticias as n inner join categorias as c on n.id_categoria = c.id inner join usuarios as u on n.id_usuario = u.id";

			$result = mysqli_query($conexao, $query);
		
			while($noticia = mysqli_fetch_assoc($result)):
				array_push($noticias, $noticia);
			endwhile;

			foreach ($noticias as $n):
				echo	"<tr>
					 		<th scope='row'>".$n['id']."</th>
					 		<td>".$n['titulo']."</td>
					 		<td>".$n['categoria']."</td>
					 		<td>".$n['datahora']."</td>
					 		<td>".$n['nome']."</td>
					 		<td>
								<form method='post' action='edit.php'>
									<input type='hidden' name='id' value='".$n['id']."'>
									<button type='submit' class='btn btn-outline-info'>
										Alterar
									</button>
								</form>
							</td>";
				if($_SESSION['UsuarioNivel'] == "administrador") :

					echo 	"<td>
								<form method='post' action=''>
									<button type='button'class='btn btn-outline-danger'>
										Excluir
									</button>
								</form>
							 </td>";
				endif;

			    echo 	"</tr>";
			
			endforeach;
			
		}

		public static function search_news($conexao, $id){

			$query = "select * from noticias where id = {$id}";

			$result = mysqli_query($conexao, $query);

			return mysqli_fetch_assoc($result);
		}

		public function edit($conexao, $id){

			$query = "update noticias set titulo = '{$this->titulo}', subtitulo = '{$this->subtitulo}', texto = '{$this->texto}', imagens = '{$this->imagens}', videos = '{$this->videos}', tags = '{$this->tags}', id_categoria = '{$this->categoria}' where id = {$id}";

			return mysqli_query($conexao, $query);

		}

	}

?>