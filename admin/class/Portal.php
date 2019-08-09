<?php
	
	class Portal{

		public static function destaques($conexao){

			$noticias = [];
			$query = "select n.id, n.titulo, n.subtitulo, n.texto, n.imagens, n.videos, n.tags, c.categoria, n.datahora, u.nome from noticias as n inner join categorias as c on n.id_categoria = c.id inner join usuarios as u on n.id_usuario = u.id order by id desc";

			$result = mysqli_query($conexao, $query);
		
			while($noticia = mysqli_fetch_assoc($result)):
				if(count($noticias) < 5):
							array_push($noticias, $noticia);
				endif;
			endwhile;

			return $noticias;

		}
	}

?>