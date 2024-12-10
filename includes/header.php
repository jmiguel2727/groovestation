<header style="background-color: #6699cc;">
    <div class="container d-flex justify-content-between align-items-center">
        
        <!-- Logo -->
        <a href="index.php">
            <img src="imagens/logo.png" alt="Logo" class="img-fluid my-2" style="height: 80px;">
        </a>
        
        <!-- Menu de navegação -->
        <nav>
            <ul class="nav" style="font-size: 1.3rem;">
                <li class="nav-item">
                    <a class="nav-link text-white text-decoration-none" href="Guitarras.php">Guitarras</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white text-decoration-none" href="Baterias.php">Baterias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white text-decoration-none" href="Teclados.php">Teclados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white text-decoration-none" href="Sopros.php">Sopros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white text-decoration-none" href="Tradicionais.php">Tradicionais</a>
                </li>
            </ul>
        </nav>
        
        <!-- Idioma e Carrinho -->
        <div class="d-flex align-items-center">
            <span style="font-size: 1rem;">PT-EUR</span>
            <!-- Ícone de Carrinho -->
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
        <h2>Carrinho</h2>
        <div class="button hide-large" onclick="closeSidebar()" style="font-size: 30px; cursor: pointer;">&times;</div>
    </div>
  
    <!-- Adicione os itens do carrinho aqui -->

    <!-- Botão Finalizar Compra -->
     
    <a href="checkout.php" class="btn btn-lg text-white" style="position: absolute; background-color: #2b5d8e; bottom: 10px; left: 10px; right: 10px;">Finalizar Compra</a>

</div>


<script>
// Função para abrir a sidebar
function openSideBar() {
  document.getElementById("mySidebar").style.display = "block";
}

// Função para fechar a sidebar
function closeSidebar() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
