<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <?php include('includes/linkscss.php') ?>
</head>

<body>
    <?php include('includes/header.php') ?>

    <main class="container mt-3">
        <div class="p-3 rounded">
            <h2 class="text-center mb-4" style="font-weight: bold;">Dados de Faturação</h2>
            <div class="row">
                <!-- Formulário de Dados do Cliente -->
                <div class="checkout-container col-md-8 col-lg-4 mb-4 mt-3">
                    <form id="billing-form" action="includes/checkout.php" method="GET">
                    <input id="compraId" type="hidden" value="xyz" name="compraId">    
                    <div class="form-row mb-3">
                            <div class="form-group col-6">
                                <label for="nome">Nome *</label>
                                <input type="text" class="form-control" name="nome" id="nome" >
                            </div>
                            <div class="form-group col-6">
                                <label for="apelido">Apelido *</label>
                                <input type="text" class="form-control" name="apelido" id="apelido" >
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contacto">Contacto *</label>
                            <input type="text" class="form-control" name="contacto" id="contacto" >
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email *</label>
                            <input type="email" class="form-control" name="email" id="email" >
                        </div>
                        <div class="form-group mb-3">
                            <label for="morada">Morada *</label>
                            <input type="text" class="form-control" name="morada" id="morada" >
                        </div>
                        <div class="form-row mb-3">
                            <div class="form-group col-6">
                                <label for="codigoPostal">Código Postal *</label>
                                <input type="text" class="form-control" name="codigoPostal" id="codigoPostal" >
                            </div>
                            <div class="form-group col-6">
                                <label for="localidade">Localidade *</label>
                                <input type="text" class="form-control" name="localidade" id="localidade" >
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nif">NIF</label>
                            <input type="text" class="form-control" name="nif" id="nif">
                        </div>
                        <button type="submit" class="finalizar mt-4 text-white" id="">Finalizar Compra</button>
                    </form>
                </div>

                <!-- Resumo do Carrinho -->
                <div class="col-md-4 col-lg-6 mb-4">
                    <h3 class="text-center">Resumo do Carrinho</h3>
                    <div id="cart-items-checkout" class="overflow-y-auto" style="height: 70vh; padding: 20px;"></div>
                    <div id="cart-total-checkout" style="padding: 20px; font-size: 25px">Total: 0 €</div>
                </div>
            </div>
        </div>
    </main>

    <?php include('includes/footer.php') ?>

    <script src="includes/jscheckout.js"></script>
    <script>
        document.getElementById('compraId').value = 'zzz';
        // Adicionar evento ao botão de finalizar compra
        document.getElementById('finalizar-compra').addEventListener('click', finalizarCompra);
    </script>
</body>

</html>