<?php include('../includes/header.php');
      include('../../class/Conexao.php');
      include('../../class/Categorias.php'); ?>

	<section class="container">

		<h1>Listagem de categorias</h1>

		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">id</th>
		      <th scope="col">Nome</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php $categorias = Categorias::list($conexao); ?>
		  </tbody>
		</table>

	</section>

<?php include('../includes/footer.html'); ?>