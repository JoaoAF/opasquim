<?php

	Class Categorias{

		private $categoria;

		function __construct($categoria){

			$this->categoria = $categoria;
		}	

		public function insert($conexao, $categoria){

			$query = "insert into categorias(categoria)values('{$categoria}')";
			mysqli_query($conexao, $query);
		}

		public static function search($conexao){

			$categorias = [];
			$query = "select * from categorias";

			$result = mysqli_query($conexao, $query);
		
			while($c = mysqli_fetch_assoc($result)):
				array_push($categorias, $c);
			endwhile;

			foreach ($categorias as $c):
			     		echo "<option value=" . $c['id'] .">" . $c['categoria'] . "</option>";
			endforeach;

		}

		public static function list($conexao){

			$categorias = [];
			$query = "select * from categorias";

			$result = mysqli_query($conexao, $query);
		
			while($categoria = mysqli_fetch_assoc($result)):
				array_push($categorias, $categoria);
			endwhile;

			foreach ($categorias as $c):
				echo	"<tr>
					 		<th scope='row'>".$c['id']."</th>
					 		<td>".$c['categoria']."</td>";
					 		
				if($_SESSION['UsuarioNivel'] == "administrador") :
				
					echo  	"<td>
								<form method='post' action='edit.php'>
									<input type='hidden' name='id' value='".$c['id']."'>
									<button type='submit' class='btn btn-outline-info'>
										Alterar
									</button>
								</form>
							</td>
					 		<td>
								<form method='post' action=''>
									<button type='button'class='btn btn-outline-danger'>
										Excluir
									</button>
								</form>
							</td>";
				
				endif;
			    echo 		"</tr>";
			endforeach;
		}

		public function edit($conexao, $id){

			$query = "update categorias set categoria = '{$this->categoria}' where id = {$id}";

			return mysqli_query($conexao, $query);
		}
	}

?>