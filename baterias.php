<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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

    
    <!-- Lista de Baterias -->
    <div class="container text-center mt-5">
        <h1>Baterias e Percussão</h1>
    </div>

    <main class="container mt-4">
        <div class="p-5 rounded">
                
            <h1 class="h4 font-weight-bold mb-2">Baterias e Percussão: Descubra os melhores preços</h1>
            <p class="text-muted mb-4">Explore ritmos envolventes com as nossos produtos de altíssima qualidade.</p>

            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card ">
                        <img alt="Bateria Acústica Completa" class="card-img-top" src="imagens/9.png">
                        <div class="card-body text-center">
                            <p class="card-text">Bateria Acústica</p>
                            <p class="card-text">10 €</p>
                            <button class="carrinho text-white">
                                <i class="bi bi-cart3" style="font-size: 1.2rem;"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card ">
                        <img alt="Bateria Acústica Completa" class="card-img-top" src="imagens/10.png">
                        <div class="card-body text-center">
                            <p class="card-text">Bateria Digital</p>
                            <p class="card-text">10 €</p>
                            <button class="carrinho text-white">
                                <i class="bi bi-cart3" style="font-size: 1.2rem;"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card ">
                        <img alt="Bateria Acústica Completa" class="card-img-top" src="imagens/11.png">
                        <div class="card-body text-center">
                            <p class="card-text">Acessório para Bateria</p>
                            <p class="card-text">10 €</p>
                            <button class="carrinho text-white">
                                <i class="bi bi-cart3" style="font-size: 1.2rem;"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card ">
                        <img alt="Bateria Acústica Completa" class="card-img-top" src="imagens/12.png">
                        <div class="card-body text-center">
                            <p class="card-text">Bateria com Ferragens</p>
                            <p class="card-text">10 €</p>
                            <button class="carrinho text-white">
                                <i class="bi bi-cart3" style="font-size: 1.2rem;"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card ">
                        <img alt="Bateria Acústica Completa" class="card-img-top" src="imagens/13.png">
                        <div class="card-body text-center">
                            <p class="card-text">Timbalão de Chão</p>
                            <p class="card-text">10 €</p>
                            <button class="carrinho text-white">
                                <i class="bi bi-cart3" style="font-size: 1.2rem;"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card ">
                        <img alt="Bateria Acústica Completa" class="card-img-top" src="imagens/14.png">
                        <div class="card-body text-center">
                            <p class="card-text">Tarola de Madeeira</p>
                            <p class="card-text">10 €</p>
                            <button class="carrinho text-white">
                                <i class="bi bi-cart3" style="font-size: 1.2rem;"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card ">
                        <img alt="Bateria Acústica Completa" class="card-img-top" src="imagens/15.png">
                        <div class="card-body text-center">
                            <p class="card-text">Bombo</p>
                            <p class="card-text">10 €</p>
                            <button class="carrinho text-white">
                                <i class="bi bi-cart3" style="font-size: 1.2rem;"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card ">
                        <img alt="Bateria Acústica Completa" class="card-img-top" src="imagens/16.png">
                        <div class="card-body text-center">
                            <p class="card-text">Timbalão</p>
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


    

