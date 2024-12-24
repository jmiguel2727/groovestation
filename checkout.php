<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('includes/linkscss.php')?>
</head>
<body>
 
    <?php include('includes/header.php')?>

    <main class="container mt-1">
        <div class="p-3 rounded">
            <h2 class="font-weight-bold mb-4">DADOS DE FATURAÇÃO</h2>
            <div class="row">
                <div class="checkout-container col-md-8 col-lg-4 mb-4">
                    <form class="formulario " >
                        <div class="form-row mb-3">
                            <div class="form-group col-6">
                                <label for="first-name">Nome *</label>
                                <input type="text" class="form-control" id="first-name" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="last-name">Apelido *</label>
                                <input type="text" class="form-control" id="last-name" required>
                            </div>
                        </div>
                        <div class="form-group col-6">
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
                            <div class="form-group col-6">
                                <label for="postal-code">Código postal *</label>
                                <input type="text" class="form-control" id="postal-code" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="postal-location">Localidade do código postal *</label>
                                <input type="text" class="form-control" id="postal-location" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nif">NIF</label>
                            <input type="text" class="form-control" id="nif" placeholder="Nº de Contribuinte Português">
                        </div>   
                    </form>
                </div>
                <div class="col-md-4 col-lg-4 mb-4">
                    <p class="card-text detalhes-preco"> € </p>
                    <button class="finalizar mt-4 text-white">Finalizar Compra</button>
                </div>
            </div>
        </div>
    </main>

    <?php include('includes/footer.php') ?>

</body>
</html>