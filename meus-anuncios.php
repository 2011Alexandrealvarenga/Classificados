<?php require 'pages/header.php';?>
<?php 
    if(empty($_SESSION['cLogin'])){
        ?>
            <script type="text/javascript">window.location.href="login.php";</script>
        <?php
    }
;?>
    <div class="container">
        <h1>Meus anuncios</h1>
        <a href="add-anuncio.php" class="btn btn-default">Adicionar Anuncios</a>
        <table class="table table-striped">
            <thead>
                <td>
                    <th>Foto</th>
                    <th>Titulo</th>
                    <th>Valor</th>
                    <th>Ações</th>
                </td>
            </thead>
        </table>
        <?php require 'classes/anuncios.class.php';
        $a = new Anuncios();
        $anuncios = $a->getMeusAnuncios();

        foreach($anuncios as $anuncio):
        ?>
        <tr>
            <td><img src="assets/images/anuncios/<?php echo $anuncio['url']; ?>" border="0"/> </td>
            <td><?php echo $anuncio['titulo']; ?></td>
            <td>R$ <?php echo number_format($anuncio['valor'], 2); ?></td>
            <td></td>
        </tr>
        <?php
        endforeach;
        ?>
    </div>
<?php require 'pages/footer.php'; ?>
