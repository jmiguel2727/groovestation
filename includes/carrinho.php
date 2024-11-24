<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>      
    .cartTab{
    width: 400px;
    background-color: #403F5E;
    color: #eee;
    position: fixed;
    top: 0;
    right: -400px;
    bottom: 0;
    display: grid;
    grid-template-rows: 70px 1fr 70px;
    transition: .8s;
    }
    body.showCart .cartTab{
    right: 0;
    }
    body.showCart .container{
    transform: translateX(-200px);
    transition: .8s;
    }
    .cartTab .btn{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    align-items: center;
    }
    .cartTab .btn .close, .cartTab .btn .checkout-button{
    text-decoration: none;
    color: #000000;
    cursor: pointer;
    padding: 10px;
    background: #AAAAAA;
    border-radius: 8px;
    font-size: 10px;
    }
    .cartTab .btn .close, .cartTab .btn .checkout-button:hover{
    background: #BFBFBF;
    transition: .3s;    
    }
    </style>

</head>
<body>

    <!-- Carrinho -->
    <div class="cartTab">
        <h1 class="title ms-4 mt-3"  style="font-size: 2rem;">Carrinho :</h1>
        <div class="listCart">
            <p class="text-white-muted ms-4 mt-3">Ainda não está disponível</p>
        </div>
        <div class="btn ">
            <button class="close">CLOSE</button>
            <a  class="checkout-button" href="checkout.php">FINALIZAR</a>
        </div>
    </div>

    <script src="carrinho.js"></script> 
    
</body>
</html>