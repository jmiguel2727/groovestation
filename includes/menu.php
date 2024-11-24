<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
   .search-results {
    display: none;
    position: absolute;
    background-color: white;
    border: 1px solid #ccc;
    z-index: 1000;
    width: 70%;
   }
   .search-results a {
    display: block;
    padding: 10px;
    text-decoration: none;
    color: black;
   }
   .search-results a:hover {
    background-color: #f0f0f0;
   }
  </style>

</head>
<body>
    <!-- Menu principal -->
    <nav class="navbar navbar-expand-md" style="background-color: #6699cc;">
        <div class="container-fluid" >
            
            <a class="navbar-brand" href="menu_principal.php">
                <img src="imagens/logo.png" alt="Logo" style="height: 120px;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="nav-menu">
                <form class="d-flex" role="search" action="pagina_de_pesquisa.php" method="GET" style="width: 100%;">
                    <input class="form-control me-2" type="search" id="search-input" name="query" placeholder="Pesquisar" aria-label="Pesquisar" style="flex-grow: 1;">
                    <button class="btn" type="submit">
                        <i class="bi bi-search"></i> <!-- Ícone de pesquisa -->
                    </button>
                </form>
                <div class="search-results" id="search-results">
                    <a href="guitarras.php">Guitarras</a>
                    <a href="baterias.php">Baterias</a>
                    <a href="teclados.php">Teclados</a>
                    <a href="sopros.php">Sopros</a>
                    <a href="tradicionais.php">Tradicionais</a>
                </div>              
            </div>

            <!-- Ícone do carrinho -->
            <div class="row ms-5 d-flex align-items-center">
                <div class="col-md-8">
                    <span class="language">PT - EUR</span>
                </div>
                <button type="button" class="btn col-md-4">
                    <i class="icon-cart bi-cart2" style="font-size: 1.9rem;"></i>
                </button>
            </div>    
        </div>
    </nav>

    <!-- Menu Instrumentos --> 
    <nav class="navbar navbar-expand-md " style="background-color: #b3cce6;" >
        <div class="container-fluid" >
            
            <div class="collapse navbar-collapse" id="nav-menu">
                <div class="d-flex justify-content-around w-100" style="font-size: 1.6rem;"> 
                    <a href="guitarras.php" class="nav-link text-white">Guitarras</a>
                    <a href="baterias.php" class="nav-link text-white">Baterias</a>
                    <a href="teclados.php" class="nav-link text-white">Teclados</a>
                    <a href="sopros.php" class="nav-link text-white">Sopros</a>
                    <a href="tradicionais.php" class="nav-link text-white">Tradicionais</a>
                    <a href="menu_principal.php" class="nav-link text-white">Promoções</a>
                </div>
            </div>
        </div>
    </nav> 

    <script>
        const searchInput = document.getElementById('search-input');
        const searchResults = document.getElementById('search-results');

        // Mostra resultados com base na pesquisa
        searchInput.addEventListener('input', function() {
            const query = this.value.toLowerCase();
            const items = searchResults.getElementsByTagName('a');
            let hasResults = false;

            for (let i = 0; i < items.length; i++) {
                const item = items[i];
                if (item.textContent.toLowerCase().includes(query)) {
                    item.style.display = 'block';
                    hasResults = true;
                } else {
                    item.style.display = 'none';
                }
            }

            searchResults.style.display = hasResults ? 'block' : 'none';
        });

        // Esconde resultados ao clicar fora
        document.addEventListener('click', function(event) {
            if (!searchResults.contains(event.target) && event.target !== searchInput) {
                searchResults.style.display = 'none';
            }
        });

        // Impede o fechamento ao clicar dentro dos resultados
        searchResults.addEventListener('click', function(event) {
            event.stopPropagation();
        });
    </script>
</body>
</html>
