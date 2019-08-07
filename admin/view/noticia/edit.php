
<?php include('../includes/header.php');
	  include('../../class/Conexao.php'); 
	  include('../../class/Categorias.php');
	  include('../../class/Noticias.php');
	  $noticia = Noticias::search_news($conexao, $_POST['id']);?>

	<section class="container">
		
		<br>
		<h1>Alterar Notícia</h1>
		<br>

		<form method="post" action="../../model/noticia/edit.php" enctype="multipart/form-data">
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="Titulo">Titulo</label>
		      <input type="hidden" name="id" value="<?php echo $noticia['id'] ?>">
		      <input type="text" class="form-control" id="Titulo" placeholder="Titulo" name="titulo" value="<?php echo $noticia['titulo'] ?>">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="subtitulo">Subtitulo</label>
		      <input type="text" class="form-control" id="subtitulo" placeholder="Subtitulo" name="subtitulo" value="<?php echo $noticia['subtitulo'] ?>">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="editor1">Texto</label>
		    <textarea class="form-control" id="editor1" rows="6" name="texto"><?php echo $noticia['titulo'] ?></textarea>
  		  </div>
  		  <div class="form-row">
			  <div class="form-group col-md-6">
			    <label for="imagem">Imagem</label>
			    <input type="file" class="form-control-file" id="imagem" name="imagem" accept="image/*">
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
			      <option value="<?php echo $noticia['id_categoria'] ?>"></option>
			       <?php $categorias = Categorias::search($conexao); ?>
			    </select>
	  		  </div>
	  		  <div class="form-group col-md-6">
			      <label for="tags">Tags</label>
			      <input type="text" class="form-control" id="tags" placeholder="Tags" name="tags" value="<?php echo $noticia['tags'] ?>"">
		      </div>
  		  </div>
		  <button type="submit" class="btn btn-lg btn-outline-success">Alterar</button>
		</form>
	</section>

<?php include('../includes/footer.html'); ?>
