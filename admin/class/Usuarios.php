<?php

	Class Usuarios{

		function __construct($nome, $email, $senha){

			$this->nome	 = $nome;
			$this->email = $email;
			$this->senha = $senha;

		}	

		public function insert($conexao){

			$senha = md5($this->senha);

			$query = "insert into usuarios(nome, email, senha, nivel_permissao) values('{$this->nome}', '{$this->email}', '{$senha}', 'Padrão')";

			if (mysqli_query($conexao, $query) == false) : 

				echo "Deu errado " . mysqli_error($conexao); 

			endif;
		}

		public static function list($conexao){

			$users = [];
			$query = "select * from usuarios";

			$result = mysqli_query($conexao, $query);
		
			while($user = mysqli_fetch_assoc($result)):
				array_push($users, $user);
			endwhile;

			foreach ($users as $u):
				echo	"<tr>
					 		<th scope='row'>".$u['id']."</th>
					 		<td>".$u['nome']."</td>
					 		<td>".$u['email']."</td>
					 		<td>".$u['nivel_permissao']."</td>";

				if(isset($_SESSION['UsuarioNivel']) and $_SESSION['UsuarioNivel'] == "administrador") :
					 echo	"<td>
								<form method='post' action='edit.php'>
									<input type='hidden' name='id' value=".$u['id'].">
									<button type='submit' class='btn btn-outline-info'>
										Alterar
									</button>
								</form>
							</td>
					 		<td>
								<form method='post' action='../../model/usuario/delete.php'>
									<input type='hidden' name='id' value=".$u['id'].">
									<button type='submit'class='btn btn-outline-danger'>
										Excluir
									</button>
								</form>
							</td>";
				endif;

			    echo	"</tr>";

			endforeach;
			
		}

		public static function permissions_list($conexao){

			$users = [];
			$query = "select * from usuarios";

			$result = mysqli_query($conexao, $query);
		
			while($user = mysqli_fetch_assoc($result)):
				array_push($users, $user);
			endwhile;

			foreach ($users as $u):
				echo	"<tr>
					 		<th scope='row'>".$u['id']."</th>
					 		<td>".$u['nome']."</td>
					 		<td>".$u['email']."</td>
					 		<td>".$u['nivel_permissao']."</td>";

				if($_SESSION['UsuarioNivel'] == "administrador") :
					
					echo	"<td>
								<form method='post' class='form-row' action='../../model/usuario/permissao.php'>
									<input type='hidden' name='id' value=".$u['id'].">
									<select class='form-control col-md-6' name='permissao'>
										<option></option>
										<option value='Administrador'>Administrador</option>
										<option value='Padrão'>Padrão</option>
									</select>
									<button type='submit' class='btn btn-outline-info col-md-6'>
										Alterar
									</button>
								</form>
							 </td>
					 		 <td>";
				endif;

			    echo	"</tr>";

			endforeach;
			
		}

		public static function alter_permission($conexao, $permissao, $id){

			$query = "update usuarios set nivel_permissao = '{$permissao}' where id = {$id}"; 
			
			return mysqli_query($conexao, $query);
		}	

		public static function search_user($conexao, $id){

			$query = "select * from usuarios where id = {$id}";

			$result = mysqli_query($conexao, $query);

			return mysqli_fetch_assoc($result);
		}

		public function edit($conexao, $id, $nome, $email, $senha){

			$query = "update usuarios set nome = '{$nome}', email = '{$email}', senha = '{$senha}' where id = {$id}";

			return mysqli_query($conexao, $query);

		}

		public static function login($conexao, $email, $senha){
			
			$error = '';

			$senha = md5($senha);
			
			$query = "select * from usuarios where email = '{$email}' and senha = '{$senha}'";

			$result = mysqli_query($conexao, $query);

			if(isset($result)){
				
				return mysqli_fetch_assoc($result);
			}else{
				
				$error = 'Vishe, deu certo não';
			}
		}
	
		public static function delete($conexao, $id){

			$query = "delete from usuarios where id = {$id}";

			return mysqli_query($conexao, $query);
		}
	}

?>