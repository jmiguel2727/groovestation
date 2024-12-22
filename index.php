<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groove Station</title>
    <?php include('includes/linkscss.php') ?>
    
</head>
<body>
    
    <?php include('includes/header.php') ?>
    
   <!-- Frase de boas-vindas -->
   <div class="container text-center mt-5">
        <h1>Bem-vindo(a) à Groove Station!</h1>
    </div>

    <!-- CAROUSEL -->
    <div style="margin: 50px auto; max-width: 1200px; padding: 0 15px;">
        <div class="carousel slide" id="galeria-principal" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-slide-to="0" data-bs-target="#galeria-principal" class="active"></button>
                <button type="button" data-bs-slide-to="1" data-bs-target="#galeria-principal"></button>
                <button type="button" data-bs-slide-to="2" data-bs-target="#galeria-principal"></button>
                <button type="button" data-bs-slide-to="3" data-bs-target="#galeria-principal"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="4000">
                    <img src="imagens/promocao1.png" alt="Promoção 1" class="d-block w-100" style="object-fit: cover;">
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="imagens/promocao2.jpg" alt="Promoção 2" class="d-block w-100" style="object-fit: cover;">
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="imagens/promocao3.png" alt="Promoção 3" class="d-block w-100" style="object-fit: cover;">
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="imagens/promocao4.png" alt="Promoção 4" class="d-block w-100" style="object-fit: cover;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#galeria-principal" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#galeria-principal" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>



    <!-- Informações -->
    <div class="container py-5 mb-5">
        <div class="row d-flex">
            <div class="col-12 col-md-4 col-lg-2 d-flex">
                <div class="feature-box text-center flex-fill">
                    <div class="feature-icon">
                        <i class="bi bi-truck fs-4"></i>
                    </div>
                    <h3 class="title-feature">Entregas Rápidas</h3>
                    <p class="text-feature">Menos de 24H</p>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-2 d-flex">
                <div class="feature-box text-center flex-fill">
                    <div class="feature-icon">
                        <i class="bi bi-shield-check fs-4"></i>
                    </div>
                    <h3 class="title-feature">5 Anos de Garantia</h3>
                    <p class="text-feature">Grátis</p>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-2 d-flex">
                <div class="feature-box text-center flex-fill">
                    <div class="feature-icon">
                        <i class="bi bi-arrow-counterclockwise fs-4"></i>
                    </div>
                    <h3 class="title-feature">30 dias</h3>
                    <p class="text-feature">Para devolução</p>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-2 d-flex">
                <div class="feature-box text-center flex-fill">
                    <div class="feature-icon">
                        <i class="bi bi-headset fs-4"></i>
                    </div>
                    <h3 class="title-feature">Suporte Dedicado</h3>
                    <p class="text-feature">Pré e Pós Venda</p>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-2 d-flex">
                <div class="feature-box text-center flex-fill">
                    <div class="feature-icon">
                        <i class="bi bi-credit-card fs-4"></i>
                    </div>
                    <h3 class="title-feature">Pagamento 12x</h3>
                    <p class="text-feature">Sem juros</p>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-2 d-flex">
                <div class="feature-box text-center flex-fill">
                    <div class="feature-icon">
                        <i class="bi bi-award fs-4"></i>
                    </div>
                    <h3 class="title-feature">Melhor Serviço</h3>
                    <p class="text-feature">De Portugal</p>
                </div>
            </div>
        </div>
    </div>



        
    <?php include('includes/footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> <!-- script do bootstrap -->

</body>
</html>

