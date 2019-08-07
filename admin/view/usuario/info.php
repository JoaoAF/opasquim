<?php include('../includes/header.php');
      include('../../class/Conexao.php'); 
      include('../../class/Usuarios.php'); 
      $usuario = Usuarios::search_user($conexao, $_SESSION['UsuarioID']);?>

<section class="container">
  <h1>Informações Pessoais</h1>
  <form method="post" action="../../model/usuario/edit.php">
  <input type="hidden" name='id' value="<?php echo $usuario['id'] ?>">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nome</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Nome" name="nome"
      value="<?php echo $usuario['nome'] ?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email"
      value="<?php echo $usuario['email'] ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Senha</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Senha" name="senha" value="<?php echo $usuario['senha'] ?>">
    </div>
  </div>
  <button type="submit" class="btn btn-lg btn-info">Alterar</button>
</form>
</section>

<?php include('../includes/footer.html'); ?>