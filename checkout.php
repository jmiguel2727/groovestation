<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>      
        .finalizar {
        cursor: pointer;
        width: 100%;
        padding: 8px;
        background: #35BF3E;
        border-radius: 8px;
        }
    
        .finalizar:hover {
        background: #2a2f43f1;
        transition: .3s;        
        }
        .checkout-container {
            background-color: #f6f6f6;
            padding: 2rem;
            border-radius: 1.7rem;            
            width: 40rem;
        }        
    </style>

</head>
<body>

    <?php include('includes/linkscss.php') ?>
    <?php include('includes/header.php') ?>

    <main class="checkout-container mx-auto mt-5 mb-5">
        <h2 class="font-weight-bold mb-4">DADOS DE FATURAÇÃO</h2>
        <form class="formulario">
            <div class="form-row mb-3">
                <div class="form-group col-md-6">
                    <label for="first-name">Nome *</label>
                    <input type="text" class="form-control" id="first-name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="last-name">Apelido *</label>
                    <input type="text" class="form-control" id="last-name" required>
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="phone">Contacto *</label>
                <input type="text" class="form-control" id="phone" required>
            </div>
            <div class="form-group mb-3">
                <label for="email">Endereço de email *</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="form-group mb-3">
                <label for="address">Morada *</label>
                <input type="text" class="form-control" id="address" placeholder="Nome da rua e número da porta" required>
            </div>
            <div class="form-row mb-3">
                <div class="form-group col-md-6">
                    <label for="postal-code">Código postal *</label>
                    <input type="text" class="form-control" id="postal-code" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="postal-location">Localidade do código postal *</label>
                    <input type="text" class="form-control" id="postal-location" required>
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="nif">NIF</label>
                <input type="text" class="form-control" id="nif" placeholder="Nº de Contribuinte Português">
            </div>
            <button class="finalizar mt-4 text-white">Finalizar Compra</button>
        </form>
    </main>

    <?php include('includes/footer.php') ?>

</body>
</html>