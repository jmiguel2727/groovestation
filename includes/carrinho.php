<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>      
    .cartTab{
    width: 400px;
    background-color: #2a2f43f1;
    color: #eee;
    position: fixed;
    top: 0;
    right: -400px;
    bottom: 0;
    display: grid;
    grid-template-rows: 70px 1fr 70px;
    transition: .8s;
    border-radius: 8px;
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
    }
    .cartTab .btn button, .cartTab .btn .checkout-button{
    text-decoration: none;
    color: #eee;
    cursor: pointer;
    padding: 5px;
    background: #AAAAAA;
    border-radius: 4px;
    font-size: 18px;
    }
    .cartTab .btn button, .cartTab .btn .checkout-button:hover{
    background: #BFBFBF;
    transition: .3s;    
    }
    </style>

</head>
<body>

    <!-- Carrinho -->
    <div class="cartTab">
        <h1 class="title ms-3 mt-3">Carrinho :</h1>
        <div class="listCart">
            
        </div>
        <div class="btn ">
            <button class="close ">CLOSE</button>
            <a href="checkout.php" class="checkout-button ">Finalizar Compra</a>
        </div>
    </div>

    <script src="carrinho.js"></script> 
    
</body>
</html>