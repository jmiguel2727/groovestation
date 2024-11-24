<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teclados</title>

    <style>
    .carrinho {
        cursor: pointer;
        width: 100%;
        padding: 3px;
        background: #6699cc;
        border-radius: 8px;
    }
    
    .carrinho:hover {
        background: #2a2f43f1;
        transition: .3s;        
    }
    .card img {
    width: 100%; /* Garante que a imagem se ajuste à largura do container */
    max-width: 180px; /* Define o tamanho máximo da largura da imagem */
    height: auto; /* Mantém a proporção original da imagem */
    margin: auto; /* Centraliza a imagem, se necessário */
    }
    .card-body p {
    margin: 4px; /* espaçamento vertical entre as frases */
    line-height: 1.7; /* altura da linha para aproximar o texto */
    }
    </style>

</head>
<body>

    <?php include('includes/linkscss.php') ?>
    <?php include('includes/menu.php') ?>
    <?php include('includes/carrinho.php') ?>


    <!-- Lista de Teclados -->
    <div class="container text-center mt-5">
        <h1>Teclados</h1>
    </div>

    <main class="container mt-4">
        <div class="p-5 rounded">
                
            <h1 class="h4 font-weight-bold mb-2">Teclados: Descubra os melhores preços</h1>
            <p class="text-muted mb-4">Explore ritmos envolventes com as nossos produtos de altíssima qualidade.</p>

            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card ">
                        <img alt="Bateria Acústica Completa" class="card-img-top" src="imagens/17.png">
                        <div class="card-body text-center">
                            <p class="card-text">Yamaha PSR-SX720</p>
                            <p class="card-text">10 €</p>
                            <button class="carrinho text-white">
                                <i class="bi bi-cart3" style="font-size: 1.2rem;"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card ">
                        <img alt="Bateria Acústica Completa" class="card-img-top" src="imagens/18.png">
                        <div class="card-body text-center">
                            <p class="card-text">Yamaha PSR-EW320</p>
                            <p class="card-text">10 €</p>
                            <button class="carrinho text-white">
                                <i class="bi bi-cart3" style="font-size: 1.2rem;"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card ">
                        <img alt="Bateria Acústica Completa" class="card-img-top" src="imagens/19.png">
                        <div class="card-body text-center">
                            <p class="card-text">Casio CT-S1 Preto</p>
                            <p class="card-text">10 €</p>
                            <button class="carrinho text-white">
                                <i class="bi bi-cart3" style="font-size: 1.2rem;"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card ">
                        <img alt="Bateria Acústica Completa" class="card-img-top" src="imagens/20.png">
                        <div class="card-body text-center">
                            <p class="card-text">Casio CT-S1 Vermelho</p>
                            <p class="card-text">10 €</p>
                            <button class="carrinho text-white">
                                <i class="bi bi-cart3" style="font-size: 1.2rem;"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card ">
                        <img alt="Bateria Acústica Completa" class="card-img-top" src="imagens/21.png">
                        <div class="card-body text-center">
                            <p class="card-text">Casio CT-S200 Vermelho</p>
                            <p class="card-text">10 €</p>
                            <button class="carrinho text-white">
                                <i class="bi bi-cart3" style="font-size: 1.2rem;"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card ">
                        <img alt="Bateria Acústica Completa" class="card-img-top" src="imagens/22.png">
                        <div class="card-body text-center">
                            <p class="card-text">Teclado MIDI 25 teclas</p>
                            <p class="card-text">10 €</p>
                            <button class="carrinho text-white">
                                <i class="bi bi-cart3" style="font-size: 1.2rem;"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card ">
                        <img alt="Bateria Acústica Completa" class="card-img-top" src="imagens/23.png">
                        <div class="card-body text-center">
                            <p class="card-text">Teclado MIDI 49 Teclas</p>
                            <p class="card-text">10 €</p>
                            <button class="carrinho text-white">
                                <i class="bi bi-cart3" style="font-size: 1.2rem;"></i>
                            </button>
                        </div>
                    </div> 
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card ">
                        <img alt="Bateria Acústica Completa" class="card-img-top" src="imagens/24.png">
                        <div class="card-body text-center">
                            <p class="card-text">Teclado MIDI 88 Teclas</p>
                            <p class="card-text">10 €</p>
                            <button class="carrinho text-white">
                                <i class="bi bi-cart3" style="font-size: 1.2rem;"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <?php include('includes/sobre.php') ?>

</body>
</html>

