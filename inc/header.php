<?php require("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classificados</title>
    <link rel="stylesheet" href="<?= BASE; ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE; ?>/assets/css/style.css">
</head>
<body>
  <div class="container margin-top">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Classificados</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  <div class="my-2 my-sm-0">
  <ul class="nav navbar-nav navbar-right">
    <?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
  <li class="nav-item"><a class="nav-link" href="anuncios.php">Meus Anúncios</a></li>
  <li class="nav-item"><a class="nav-link" href="logout.php">Sair</a></li>
    <?php else: ?>
  <li class="nav-item"><a class="nav-link" href="cadastro.php">Cadastre-se</a></li>
  <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
    <?php endif; ?>
    </ul>
  </div>
    </div>

</nav>