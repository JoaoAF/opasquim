<?php include('../includes/header.php');
      include('../../class/Conexao.php'); ?>

<section class="container">
  <h1>Cadastre-se</h1>
  <form method="post" action="../../model/usuario/insert.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nome</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Nome" name="nome">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Senha</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Senha" name="senha">
    </div>
  </div>
  <button type="submit" class="btn btn-lg btn-info">Cadastrar</button>
</form>
</section>

<?php include('../includes/footer.html'); ?>