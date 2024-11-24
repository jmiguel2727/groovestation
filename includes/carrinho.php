<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>      
    
    .cartTab .close, .cartTab .checkout-button{
    text-decoration: none;
    color: #eee;
    cursor: pointer;
    padding: 5px;
    background: #AAAAAA;
    border-radius: 4px;
    font-size: 18px;
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
        <h1 class="title ms-3 mt-3">Carrinho :</h1>
        <div class="listCart">
            
        </div>
        <div class="btn ">
            <a class="close">CLOSE</a>
            <a href="checkout.php" class="checkout-button ">Finalizar Compra</a>
        </div>
    </div>

    <script src="carrinho.js"></script> 
    
</body>
</html>