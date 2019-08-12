
<?php include('../includes/header.php');
	  include('../../class/Categorias.php');
	  include('../../class/Conexao.php'); ?>

	<section class="container">
		
		<br>
		<h1>Cadastrar Notícia</h1>
		<br>

		<form method="post" action="../../model/noticia/insert.php" enctype="multipart/form-data">
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="Titulo">Titulo</label>
		      <input type="text" class="form-control" id="Titulo" placeholder="Titulo" name="titulo">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="subtitulo">Subtitulo</label>
		      <input type="text" class="form-control" id="subtitulo" placeholder="Subtitulo" name="subtitulo">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="editor1">Texto</label>
		    <div id="editor">
		    	<textarea class="form-control" rows="6" id="texto" name="texto"></textarea>
  		  	</div>
  		  </div>
  		  <div class="form-row">
			  <div class="form-group col-md-6">
			    <label for="imagem">Imagem</label>
			    <input type="file" class="form-control-file" id="imagem" name="imagem" accept="image/*">
	  		  </div>
	  		  <div class="form-group col-md-6">
			    <label for="video">Video</label>
		      <input type="text" class="form-control" id="video" placeholder="Vídeo" name="video">
	  		  </div>
  		  </div>
  		  <div class="form-row">
			  <div class="form-group col-md-6">
			    <label for="categoria">Categoria</label>
			    <select class="form-control" id="categoria" name="categoria">
			      <option></option>
			       <?php $categorias = Categorias::search($conexao); ?>
			    </select>
	  		  </div>
	  		  <div class="form-group col-md-6">
			      <label for="tags">Tags</label>
			      <input type="text" class="form-control" id="tags" placeholder="Tags" name="tags">
		      </div>
  		  </div>
		  <button type="submit" class="btn btn-lg btn-outline-success">Cadastrar</button>
		</form>
	</section>

<?php include('../includes/footer.html'); ?>
