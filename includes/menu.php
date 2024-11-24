<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>      
    svg{
    width: 30px;
    }
    header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 0;
    }
    .icon-cart{
    position: relative;
    }
    .icon-cart span{
    position: absolute;
    background-color: red;
    width: 30px;
    height: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    color: #fff;
    top: 50%;
    right: -20px;
    }
    .title{
    font-size: xx-large;
    }
    .listProduct .item img{
    width: 90%;
    filter: drop-shadow(0 50px 20px #0009); 
    }
    .listProduct{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    }
    .listProduct .item{
    background-color: #EEEEE6;
    padding: 20px;
    border-radius: 20px;
    }
    .listProduct .item h2{
    font-weight: 500;
    font-size: large;
    }
    .listProduct .item .price{
    letter-spacing: 7px;
    font-size: small;
    }
    .listProduct .item button{
    background-color: #353432;
    color: #eee;
    border: none;
    padding: 5px 10px;
    margin-top: 10px;
    border-radius: 20px;
    }

    /* cart */
    .cartTab{
    width: 400px;
    background-color: #353432;
    color: #eee;
    position: fixed;
    top: 0;
    right: -400px;
    bottom: 0;
    display: grid;
    grid-template-rows: 70px 1fr 70px;
    transition: .5s;
    }
    body.showCart .cartTab{
    right: 0;
    }
    body.showCart .container{
    transform: translateX(-250px);
    }
    .cartTab h1{
    padding: 20px;
    margin: 0;
    font-weight: 300;
    }
    .cartTab .btn{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    }
    .cartTab button{
    background-color: #E8BC0E;
    border: none;
    font-family: Poppins;
    font-weight: 500;
    cursor: pointer;
    }
    .cartTab .close{
    background-color: #eee;
    }
    .listCart .item img{
    width: 100%;
    }
    .listCart .item{
    display: grid;
    grid-template-columns: 70px 150px 50px 1fr;
    gap: 10px;
    text-align: center;
    align-items: center;
    }
    .listCart .quantity span{
    display: inline-block;
    width: 25px;
    height: 25px;
    background-color: #eee;
    border-radius: 50%;
    color: #555;
    cursor: pointer;
    }
    .listCart .quantity span:nth-child(2){
    background-color: transparent;
    color: #eee;
    cursor: auto;
    }
    .listCart .item:nth-child(even){
    background-color: #eee1;
    }
    .listCart{
    overflow: auto;
    }
    .listCart::-webkit-scrollbar{
    width: 0;
    }
    @media only screen and (max-width: 992px) {
    .listProduct{
        grid-template-columns: repeat(3, 1fr);
    }
    }


    /* mobile */
    @media only screen and (max-width: 768px) {
    .listProduct{
        grid-template-columns: repeat(2, 1fr);
    }
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
                </div>
            </div>
        </div>
    </nav>

    <!-- Carrinho -->
    <div class="cartTab">
        <h1>Shopping Cart</h1>
        <div class="listCart">
            
        </div>
        <div class="btn">
            <button class="close">CLOSE</button>
            <button class="checkOut">Check Out</button>
        </div>
    </div>

    <script src="carrinho.js"></script>   
</body>
</html>
