<?php require('inc/header.php'); ?>
<?php require('session.php'); ?>
<div class="container">
<h1>Meus Anúncios</h1>

<a href="add-anuncio.php">Adicionar Anúncio</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Foto</th>
            <th>Título</th>
            <th>Valor</th>
            <th>Ações</th>
        </tr>
    </thead>
    <?php
        require 'classes/anuncios.class.php';
        $a = new Anuncios();
        $anuncios = $a->getAnuncios();

        foreach($anuncios as $anuncio):
    ?>
     <tr>
            <th><img src="assets/images/anuncios/<?php echo $anuncio['url']; ?>" alt=""></th>
            <th><?php echo $anuncio['titulo']; ?></th>
            <th><?php echo number_format($anuncio['valor'], 2); ?></th>
            <th></th>
        </tr>
        <?php endforeach; ?>
</table>

</div>


<?php require('inc/footer.php'); ?>