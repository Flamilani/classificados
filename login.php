<?php require('inc/header.php'); ?>
<div class="container">
<h1>Login</h1>
<?php
require('classes/usuarios.class.php');
$usuario = new Usuarios();
if(isset($_POST['email']) && !empty($_POST['email'])) {
    $email = addslashes($_POST['email']);
    $senha = md5($_POST['senha']);

    if(!empty($email) && !empty($senha)) {
        if($usuario->logar($email, $senha)) { 
            header("Location: ./");
            } else { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Usuário e/ou senha incorretos!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
      <?php }
    } else { ?>
        <div class="alert alert-warning">
            Preencha todos os campos
        </div>
    <?php }
}
?>
<form method="POST">
    <div>
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" class="form-control" />
    </div>
    <div>
        <label for="nome">Senha:</label>
        <input type="password" name="senha" id="senha" class="form-control" />
    </div>   
    <input type="submit" value="Logar" class="btn btn-default">
</form>    
</div>
<?php require('inc/footer.php');