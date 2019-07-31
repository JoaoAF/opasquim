
<?php include('../includes/header.html'); ?>

	<section class="container">
		
		<br>
		<h1>Cadastrar Notícia</h1>
		<br>

		<form method="post" action="../../model/noticia/insert.php">
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
		    <textarea class="form-control" id="editor1" rows="6" name="texto">
		    </textarea>
  		  </div>
  		  <div class="form-row">
			  <div class="form-group col-md-6">
			    <label for="imagem">Imagem</label>
			    <input type="file" class="form-control-file" id="imagem" name="imagem">
	  		  </div>
	  		  <div class="form-group col-md-6">
			    <label for="video">Video</label>
			    <input type="file" class="form-control-file" id="video" name="video">
	  		  </div>
  		  </div>
  		  <div class="form-row">
			  <div class="form-group col-md-6">
			    <label for="categoria">Categoria</label>
			    <select class="form-control" id="categoria" name="categoria">
			      <option value="1">Categoria 1</option>
			      <option value="2">Categoria 2</option>
			      <option value="3">Categoria 3</option>
			      <option value="4">Categoria 4</option>
			      <option value="5">Categoria 5</option>
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
