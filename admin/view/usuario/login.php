<?php include('../includes/header.php');
      include('../../class/Conexao.php'); ?>

<section class="container">
  <h1>Login</h1>
  <form method="post" action="../../model/usuario/login.php">
    <div class="form-group">
      <input type="email" class="form-control col-md-6" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email">
      <small id="emailHelp" class="form-text text-muted">Verifique sempre nossas novidades na sua caixa de entrada.</small>
    </div>
    <div class="form-group">
      <input type="password" class="form-control col-md-6" id="exampleInputPassword1" placeholder="Senha" name="senha">
    </div>
    <button type="submit" class="btn btn-lg btn-info">Entrar</button>
  </form>
</section>

<?php include('../includes/footer.html'); ?>