<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        .carousel-item img {
            height: 450px; /* Defina a altura desejada */
            object-fit: cover; /* Faz com que a imagem cubra a área sem distorcer */
            width: 100%; /* Mantém a largura da imagem para 100% do container */
        }    
        .features-container {
            display: flex;
            justify-content: space-between; /* Distribui as caixas igualmente */
            gap: 20px; /* Espaçamento entre as caixas */
            padding: 10px;
        }
        .feature-box {
            flex: 16.6%; /* para caber 6 caixas na linha */
            text-align: center;
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        .feature-icon {
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #6699cc;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .feature-title {
            color: #6c757d;
            font-weight: bold;
            margin-bottom: 5px;
            font-size: 1rem;
        }
        .feature-text {
            color: #6c757d;
            font-size: 0.85rem;
        }          
    </style>
</head>
<body>

    <?php include('includes/linkscss.php') ?>
    <?php include('includes/menu.php') ?>
    

        aaaa
    <!-- Frase de boas-vindas -->
    <div class="container text-center mt-5" >
        <h1>Bem-vindo(a) à Groove Station!</h1>
    </div>

    <!-- CAROUSEL -->
    <div class="container-fluid mb-5 carousel-white slide mt-5">
        <div class="container">
            <div class="carousel slide" id="galeria-principal" data-bs-ride="carousel">
                
                <div class="carousel-indicators">
                    <button type="button" data-bs-slide-to="0" data-bs-target="#galeria-principal" class="active" aria-current="true"></button>
                    <button type="button" data-bs-slide-to="1" data-bs-target="#galeria-principal"></button>
                    <button type="button" data-bs-slide-to="2" data-bs-target="#galeria-principal"></button>
                    <button type="button" data-bs-slide-to="3" data-bs-target="#galeria-principal"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="4000">
                        <img src="imagens/1promocao.png" alt="Promoção 1" class="d-block w-100">
                    </div>

                    <div class="carousel-item" data-bs-interval="4000">
                        <img src="imagens/2promocao.png" alt="Promoção 2" class="d-block w-100">
                    </div>

                    <div class="carousel-item" data-bs-interval="4000">
                        <img src="imagens/3promocao.png" alt="Promoção 3" class="d-block w-100">
                    </div>

                    <div class="carousel-item" data-bs-interval="4000">
                        <img src="imagens/4promocao.png" alt="Promoção 4" class="d-block w-100">
                    </div>
                </div>

                <!-- Botões de andar para o lado -->
                <button class="carousel-control-prev" type="button" data-bs-target="#galeria-principal" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#galeria-principal" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>



    <!-- Informações -->
    <div class="container py-5">
        <div class="features-container mb-5">
            <div class="feature-box">
                <div class="feature-icon">
                    <i class="fas fa-shipping-fast fs-4"></i>
                </div>
                <h3 class="feature-title">Entregas Rápidas</h3>
                <p class="feature-text">Até as 14h do dia seguinte</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">
                    <i class="fas fa-shield-alt fs-4"></i>
                </div>
                <h3 class="feature-title">5 Anos de Garantia</h3>
                <p class="feature-text">Grátis</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">
                    <i class="fas fa-undo fs-4"></i>
                </div>
                <h3 class="feature-title">30 dias</h3>
                <p class="feature-text">Para devolução</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">
                    <i class="fas fa-headset fs-4"></i>
                </div>
                <h3 class="feature-title">Suporte Dedicado</h3>
                <p class="feature-text">Pré e Pós Venda</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">
                    <i class="fas fa-credit-card fs-4"></i>
                </div>
                <h3 class="feature-title">Pagamento 12x</h3>
                <p class="feature-text">Sem juros</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">
                    <i class="fas fa-award fs-4"></i>
                </div>
                <h3 class="feature-title">Melhor Serviço</h3>
                <p class="feature-text">De Portugal</p>
            </div>
        </div>
    </div>


            
    <?php include('includes/sobre.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script> 

    <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>

