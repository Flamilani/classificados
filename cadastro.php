<?php require('inc/header.php'); ?>
<div class="container">
<h1>Cadastre-se</h1>
<?php
require('classes/usuarios.class.php');
$usuario = new Usuarios();
if(isset($_POST['nome']) && !empty($_POST['nome'])) {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = md5($_POST['senha']);
    $celular = addslashes($_POST['celular']);

    if(!empty($nome) && !empty($email) && !empty($senha)) {
        if($usuario->cadastrar($nome, $email, $senha, $celular)) { ?>
            <div class="alert alert-success">
                <strong>Parabéns!</strong> Cadastro com sucesso
                <a href="login.php" class="alert-link">Login</a>
            </div>
       <?php } else { ?>
        <div class="alert alert-warning">
                <strong>Este usuário já existe!</strong> 
                <a href="login.php" class="alert-link">Login</a>
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
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control" />
    </div>
    <div>
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" class="form-control" />
    </div>
    <div>
        <label for="nome">Senha:</label>
        <input type="password" name="senha" id="senha" class="form-control" />
    </div>
    <div>
        <label for="nome">Celular:</label>
        <input type="text" name="celular" id="celular" class="form-control" />
    </div>
    <input type="submit" value="Cadastrar" class="btn btn-default">
</form>    
</div>
<?php require('inc/footer.php');