<?php
	
	class Portal{

		public static function menu($conexao){

			$itens  = [];
			$query  = "select * from categorias";
			$categorias = mysqli_query($conexao, $query);
			
			$users    = [];
			$query    = "select * from usuarios";
			$usuarios = mysqli_query($conexao, $query);

			echo "<ul>
					<li class='active'><a href='index.php'>O Pasquim</a></li>";

						while ($i = mysqli_fetch_assoc($categorias)):
							
							if (count($itens) < 5):
								
								array_push($itens, $i);
								echo "<li><a href='#".$i['categoria']."'>".$i['categoria']."</a>";
								
								if ($i['categoria'] == "Crônicas"){
									echo "<ul class='dropdown'>";
									while ($u = mysqli_fetch_assoc($usuarios)):
										if (count($users) < 5):
											array_push($users, $u);
							 				echo "<li><a href='#".$i['categoria']."'>".$u['nome']."</a></li>";
							 			endif;
									endwhile;
			                		echo "</ul></li>";
								}else{

									echo "</li>";
								}
							
							endif;
						endwhile;
			echo   "</li></ul>";
		}

		public static function menu_internas($conexao){

			$itens  = [];
			$query  = "select * from categorias";
			$categorias = mysqli_query($conexao, $query);
			
			$users    = [];
			$query    = "select * from usuarios";
			$usuarios = mysqli_query($conexao, $query);

			echo "<ul>
					<li class='active'><a href='index.php'>O Pasquim</a></li>";

						while ($i = mysqli_fetch_assoc($categorias)):
							
							if (count($itens) < 5):
								
								array_push($itens, $i);
								echo "<li><a href='index.php#".$i['categoria']."'>".$i['categoria']."</a>";
								
								if ($i['categoria'] == "Crônicas"){
									echo "<ul class='dropdown'>";
									while ($u = mysqli_fetch_assoc($usuarios)):
										if (count($users) < 5):
											array_push($users, $u);
							 				echo "<li><a href='index.php#".$i['categoria']."'>".$u['nome']."</a></li>";
							 			endif;
									endwhile;
			                		echo "</ul></li>";
								}else{

									echo "</li>";
								}
							
							endif;
						endwhile;
			echo   "</li></ul>";
		}


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

		public static function carousel_categorias($conexao){

			$itens  = [];
			$query  = "select * from categorias";
			$categorias = mysqli_query($conexao, $query);

			while ($i = mysqli_fetch_assoc($categorias)):
							
				array_push($itens, $i);

				if (count($itens) <= 8) :
				
					if (count($itens) == 6):		
					echo "<li class='nav-item'>
					    	<a class='nav-link active' id='".$i['categoria']."-tab' data-toggle='tab' href=#".$i['categoria']." role='tab' aria-controls='".$i['categoria']."' aria-selected='true'>
					    		".$i['categoria']."
					    	</a>
					     </li>";
					endif;

					if (count($itens) > 6):
					echo "<li class='nav-item'>
					    	<a class='nav-link' id='".$i['categoria']."-tab' data-toggle='tab' href=#".$i['categoria']." role='tab' aria-controls='".$i['categoria']."' aria-selected='true'>
					    		".$i['categoria']."
					    	</a>
					     </li>";
					endif;
				endif;

			endwhile;
		}

		public static function carousel_noticias($conexao){

			$itens  = [];
			$query  = "select * from categorias";
			$categorias = mysqli_query($conexao, $query);

			while ($i = mysqli_fetch_assoc($categorias)):

				array_push($itens, $i);

				if (count($itens) >= 6): 
					
					if (count($itens) == 6){
						echo "<div class='tab-pane fade show active' id='".$i['categoria']."' 		role='tabpanel' aria-labelledby='latest-tab'>
								<div class='latest-videos-slide owl-carousel'>";
					}else{
						echo "<div class='tab-pane fade' id='".$i['categoria']."' 		role='tabpanel' aria-labelledby='latest-tab'>
								<div class='latest-videos-slide owl-carousel'>";
					}



					$query_noticias = "select n.*, u.nome from noticias as n inner join usuarios as u on n.id_usuario = u.id where n.id_categoria = {$i['id']}";

					$noticias = mysqli_query($conexao, $query_noticias);			
					
					while ($n = mysqli_fetch_assoc($noticias)):

					echo "<div class='single-blog-post style2'>
		                    <div class='blog-thumb mb-30'>
		                        <img style='min-width:330px !important;min-height:231px !important;width:auto;height: auto;' src='".$n['imagens']."' alt=''>";

		                if ($n['videos'] != 'Sem video'):

		                  echo "<a href='".$n['videos']."' class='video-play-btn style2'><i class='fa fa-play'></i></a>";

		                endif;


		            echo  "</div>
		                   <div class='blog-content'>
	    	                    <a href='#' class='post-tag'>".$n['nome']."</a>

		<form method='post' action='show.php' id='news_".$n['id']."'>
			
				<input type='hidden' name='titulo' 	  value='".$n['titulo']."'>
				<input type='hidden' name='subtitulo' value='".$n['subtitulo']."'>
				<input type='hidden' name='texto'     value='".$n['texto']."'>
				<input type='hidden' name='imagens'   value='".$n['imagens']."'>
				<input type='hidden' name='videos'    value='".$n['videos']."'>
				<input type='hidden' name='nome'      value='".$n['nome']."'>
				<input type='hidden' name='datahora'  value='".$n['datahora']."'>
			
		<a href='#' id='show_".$n['id']."' class='post-title'>".$n['titulo']."</a>
	
			<script type='text/javascript'>
	        $( '#show_".$n['id']."' ).click(function() {
	          $( '#news_".$n['id']."' ).submit();
	        });
	    	</script>
		
		</form>
	            	        </div>
	                	  </div>";
						
					
					endwhile;

					echo "</div></div>";

				endif;

			endwhile;
			
		}

		public static function cronicas_em_video($conexao){

			$itens  = [];
			$query  = "select n.*, c.*, u.* from noticias as n inner join categorias as c on n.id_categoria = c.id inner join usuarios as u on n.id_usuario = u.id where c.categoria = 'Crônicas' order by n.id desc";
			$noticias = mysqli_query($conexao, $query);

			while ($n = mysqli_fetch_assoc($noticias)):
				array_push($itens, $n);
			endwhile;

			return $itens;
		}

		public static function noticias_politica($conexao){

			$itens  = [];
			$query  = "select n.*, c.*, u.* from noticias as n inner join categorias as c on n.id_categoria = c.id inner join usuarios as u on n.id_usuario = u.id where c.categoria = 'Política' order by n.id desc";
			$noticias = mysqli_query($conexao, $query);

			while ($n = mysqli_fetch_assoc($noticias)):
				array_push($itens, $n);
			endwhile;

			return $itens;
		}

		public static function noticias_economia($conexao){

			$itens  = [];
			$query  = "select n.*, c.*, u.* from noticias as n inner join categorias as c on n.id_categoria = c.id inner join usuarios as u on n.id_usuario = u.id where c.categoria = 'Economia' order by n.id desc";
			$noticias = mysqli_query($conexao, $query);

			while ($n = mysqli_fetch_assoc($noticias)):
				array_push($itens, $n);
			endwhile;

			return $itens;
		}

		public static function noticias_esportes($conexao){

			$itens  = [];
			$query  = "select n.*, c.*, u.* from noticias as n inner join categorias as c on n.id_categoria = c.id inner join usuarios as u on n.id_usuario = u.id where c.categoria = 'Esportes' order by n.id desc";
			$noticias = mysqli_query($conexao, $query);

			while ($n = mysqli_fetch_assoc($noticias)):
				array_push($itens, $n);
			endwhile;

			return $itens;
		}

		public static function numerador_conteudos($conexao){

			$itens  = [];
			$query  = "select * from categorias";
			$categorias = mysqli_query($conexao, $query);

			while ($c = mysqli_fetch_assoc($categorias)):
				array_push($itens, $c);
			endwhile;

			foreach ($itens as $categoria) :

				$num  = "select count(id) as qtd from noticias where id_categoria = {$categoria['id']}";
				$qtd = mysqli_query($conexao, $num);
				
				while ($q = mysqli_fetch_assoc($qtd)):
	
					echo "<li><a href='#'><span>".$categoria['categoria']."</span> <span>".$q['qtd']."</span></a></li>";

				endwhile;
				

			endforeach;
		}
	}

?>