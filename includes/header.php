
<header style="background-color: #6699cc;">
    <div class="container d-flex justify-content-between align-items-center">
        
        <!-- Logo -->
        <a href="index.php">
            <img src="imagens/logo.png" alt="Logo" class="img-fluid my-2" style="height: 80px;">
        </a>
        
        <nav>
            <!-- Menu instrumentos visível só em ecrãs grandes-->
            <ul class="nav d-none d-md-flex" style="font-size: 1.3rem;">
                <li class="nav-item"><a class="nav-link text-white text-decoration-none" href="guitarras.php">Guitarras</a></li>
                <li class="nav-item"><a class="nav-link text-white text-decoration-none" href="baterias.php">Baterias</a></li>
                <li class="nav-item"><a class="nav-link text-white text-decoration-none" href="teclados.php">Teclados</a></li>
                <li class="nav-item"><a class="nav-link text-white text-decoration-none" href="sopros.php">Sopros</a></li>
            </ul>
            
            <!-- ecrãs pequenos -->
            <div class="d-flex d-md-none align-items-center">
                <!-- Idioma e icon carrinho -->
                <span style="font-size: 1rem;" class="me-2">PT-EUR</span>
                <button class="btn" onclick="openSideBar()">   
                    <i class="icon-cart bi-cart2" style="font-size: 1.9rem;"></i>
                </button>
                <!-- Botão menu -->
                <button class="btn btn-link text-white ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-expanded="false" aria-controls="navbarResponsive">
                    <i class="bi bi-list" style="font-size: 2rem;"></i>
                </button>
            </div>

            <!-- Conteúdo ao clicar no botão de menu -->
            <div class="collapse" id="navbarResponsive">
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link text-white text-decoration-none" href="guitarras.php">Guitarras</a></li>
                    <li class="nav-item"><a class="nav-link text-white text-decoration-none" href="baterias.php">Baterias</a></li>
                    <li class="nav-item"><a class="nav-link text-white text-decoration-none" href="teclados.php">Teclados</a></li>
                    <li class="nav-item"><a class="nav-link text-white text-decoration-none" href="sopros.php">Sopros</a></li>
                </ul>
            </div>
        </nav>

        <!-- ecrãs médios e grandes -->
        <div class="d-none d-md-flex align-items-center">
            <!-- Idioma e icon carrinho -->
            <span style="font-size: 1rem;" class="me-2">PT-EUR</span>
            <button class="btn" onclick="openSideBar()">
                <i class="icon-cart bi-cart2" style="font-size: 1.9rem;"></i>
            </button>
        </div>
    </div>
</header>

<!-- Sidebar (Carrinho) -->
<div class="sidebar bar-block collapse" style="width: 300px; right: 0; display: none; position: fixed; height: 100%; top: 0; z-index: 999; background-color: #c1cbd4;" id="mySidebar">

    <!-- Div contendo o título "Carrinho" e o botão de fechar -->
    <div class="bar-item d-flex justify-content-between align-items-center" style="position: relative; padding: 20px;">
        <h3>Carrinho</h3>
        <div class="button hide-large" onclick="closeSidebar()" style="font-size: 30px; cursor: pointer;">&times;</div>
    </div>
  
    <!-- Adicione os itens do carrinho aqui -->
    <div id="cart-items" class="overflow-y-auto" style="height: 70vh; padding: 10px;"></div>
    <div id="cart-total" style="font-weight: bold; padding:10px;">Total: 0 €</div>
    <!-- Botão Finalizar Compra --> 
    <a href="checkout.php" class="btn btn-lg text-white" style="position: absolute; background-color: #2b5d8e; bottom: 10px; left: 10px; right: 10px;">Comprar</a>
</div>

<script src="includes/jscarrinho.js">// script jscarrinho.js</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> <!-- script do bootstrap -->  