<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrumentos</title>

    <?php include('includes/linkscss.php') ?>
</head>
<body>   
    
    <?php include('includes/header.php') ?>
    <?php include('includes/connection.php') ?>

    <!-- Lista de Guitarras -->
    <div class="container text-center mt-5">
        <h1 style="font-size: 2.2rem;">Instrumentos</h1>
    </div>

    <main class="container mt-4">
        <div class="p-5 rounded">
                
            <h1 class="h4 font-weight-bold mb-2">Instrumentos: Descubra os melhores preços</h1>
            <p class="text-muted mb-4">Explore ritmos envolventes com as nossos produtos de altíssima qualidade.</p>

            <div class="row">
                <?php 
                    $sql = 'SELECT * FROM produtos';
                    $stmt = $dbh->prepare($sql);
                    $stmt->execute();

                    if($stmt && $stmt->rowCount() > 0){
                        while($produtos = $stmt->fetchObject()) {
                            $imagem = filter_var($produtos->Imagem, FILTER_VALIDATE_URL) !== false ? $produtos->Imagem : 'imagens/instrumentos/'.$produtos->Imagem;
                            ?>
                            <div class="col-md-4 col-lg-3 mb-4">
                                <div class="card ">
                                    <img alt="<?= $produtos->Nome ?>" class="card-img-top" src="<?= $imagem ?>">
                                    <div class="card-body text-center">
                                        <p class="card-text"><?= $produtos->Nome ?></p>
                                        <p class="card-text"><?= $produtos->Preco ?> € </p>
                                        <button class="carrinho text-white">
                                            <i class="bi bi-cart3" style="font-size: 1.2rem;"></i>
                                        </button>
                                        <button class="detalhes margin-top-5">
                                            <a href="instrumentos_detalhes.php?Id=<?= $produtos->Id ?>" style="font-size: 1.2rem;">Detalhes</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }    
                    }
                ?>
            </div>
        </div>
    </main>

    <?php include('includes/footer.php') ?>

</body>
</html>

