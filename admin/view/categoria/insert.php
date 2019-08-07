
<?php include('../includes/header.php'); ?>

	<section class="container">
		
		<br>
		<h1>Cadastrar Categoria</h1>
		<br>

		<form method="post" action="../../model/categoria/insert.php">
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <input type="text" class="form-control" id="Categoria" placeholder="Nome da categoria" name="categoria">
		    </div>
		    <div class="form-group col-md-6">
		  		<button type="submit" class="btn btn-outline-success">Cadastrar</button>
		    </div>
		  </div>
		</form>
	</section>

<?php include('../includes/footer.html'); ?>
