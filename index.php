<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>

    <?php include('includes/linkscss.php') ?>
    <?php include('includes/header.php') ?>
    
   <!-- Frase de boas-vindas -->
   <div class="container text-center mt-5">
        <h1>Bem-vindo(a) à Groove Station!</h1>
    </div>

    <!-- CAROUSEL -->
    <div style="margin: 50px auto; max-width: 1200px;">
        <div class="carousel slide" id="galeria-principal" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-slide-to="0" data-bs-target="#galeria-principal" class="active"></button>
                <button type="button" data-bs-slide-to="1" data-bs-target="#galeria-principal"></button>
                <button type="button" data-bs-slide-to="2" data-bs-target="#galeria-principal"></button>
                <button type="button" data-bs-slide-to="3" data-bs-target="#galeria-principal"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="4000">
                    <img src="imagens/promocao1.png" alt="Promoção 1" style="width: 100%; height: 450px; object-fit: cover;">
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="imagens/promocao2.png" alt="Promoção 2" style="width: 100%; height: 450px; object-fit: cover;">
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="imagens/promocao3.png" alt="Promoção 3" style="width: 100%; height: 450px; object-fit: cover;">
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="imagens/promocao4.png" alt="Promoção 4" style="width: 100%; height: 450px; object-fit: cover;">
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
    <div class="container py-5">
        <div class="features-container mb-5">
            <div class="feature-box">
                <div class="feature-icon">
                    <i class="fas fa-shipping-fast fs-4"></i>
                </div>
                <h3 style="font-weight: bold; font-size: 1rem;">Entregas Rápidas</h3>
                <p style="font-size: 0.85rem; color: #6c757d;">Até as 14h do dia seguinte</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">
                    <i class="fas fa-shield-alt fs-4"></i>
                </div>
                <h3 style="font-weight: bold; font-size: 1rem;">5 Anos de Garantia</h3>
                <p style="font-size: 0.85rem; color: #6c757d;">Grátis</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">
                    <i class="fas fa-undo fs-4"></i>
                </div>
                <h3 style="font-weight: bold; font-size: 1rem;">30 dias</h3>
                <p style="font-size: 0.85rem; color: #6c757d;">Para devolução</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">
                    <i class="fas fa-headset fs-4"></i>
                </div>
                <h3 style="font-weight: bold; font-size: 1rem;">Suporte Dedicado</h3>
                <p style="font-size: 0.85rem; color: #6c757d;">Pré e Pós Venda</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">
                    <i class="fas fa-credit-card fs-4"></i>
                </div>
                <h3 style="font-weight: bold; font-size: 1rem;">Pagamento 12x</h3>
                <p style="font-size: 0.85rem; color: #6c757d;">Sem juros</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">
                    <i class="fas fa-award fs-4"></i>
                </div>
                <h3 style="font-weight: bold; font-size: 1rem;">Melhor Serviço</h3>
                <p style="font-size: 0.85rem; color: #6c757d;">De Portugal</p>
            </div>
        </div>
    </div>
        
    <?php include('includes/footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script> <!-- script do carousel -->

</body>
</html>

