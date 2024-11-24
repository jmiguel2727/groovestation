<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
                    <input class="form-control me-2" type="search" name="query" placeholder="Pesquisar" aria-label="Pesquisar" style="flex-grow: 1;">
                    <button class="btn" type="submit">
                        <i class="bi bi-search"></i> <!-- Ícone de pesquisa -->
                    </button>
                </form>
            </div>

            <!-- Ícone do carrinho -->
            <div class="row ms-5 d-flex align-items-center">
                <div class="col-md-7">
                    <span class="language">PT - EUR (€) </span>
                </div>
                <button type="button" class="btn col-md-5">
                    <a href="carrinho.php" class="nav-link">
                        <i class="bi bi-cart2" style="font-size: 1.9rem;"></i>
                    </a>
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
                    <a href="estudio.php" class="nav-link text-white">Estúdio</a>
                    <a href="acessorios.php" class="nav-link text-white">Acessórios</a>
                </div>
            </div>
        </div>
    </nav>   
</body>
</html>
