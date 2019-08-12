<?php include('../includes/header.php');
      include('../../class/Conexao.php');
      include('../../class/Noticias.php'); ?>

	<section class="container">

		<h1>Listagem de notícias</h1>

		<table id="tabela" class="display">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Titulo</th>
		      <th scope="col">Categoria</th>
		      <th scope="col">DataHora</th>
		      <th scope="col">Usuário</th>
		      <th scope="col">---</th>
		      <th scope="col">---</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php $usuarios = Noticias::list($conexao); ?>
		  </tbody>
		</table>

	</section>
	
<?php include('../includes/footer.html'); ?>