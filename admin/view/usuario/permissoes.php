<?php include('../includes/header.php');
      include('../../class/Conexao.php');
      include('../../class/Usuarios.php'); ?>

	<section class="container">

		<h1>Alterar Permissões</h1>

		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Nome</th>
		      <th scope="col">Email</th>
		      <th scope="col">Permissão</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php $usuarios = Usuarios::permissions_list($conexao); ?>
		  </tbody>
		</table>

	</section>

<?php include('../includes/footer.html'); ?>