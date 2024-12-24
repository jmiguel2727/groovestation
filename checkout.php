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

    <main class="container mt-3">
        <div class="p-3 rounded">
            <h2 class="text-center mb-4" style="font-weight: bold;">DADOS DE FATURAÇÃO</h2>
            <div class="row">
                <div class="checkout-container col-md-8 col-lg-4 mb-4 mt-3">
                    <form class="formulario" id="billing-form">
                        <div class="form-row mb-3">
                            <div class="form-group col-6">
                                <label for="first-name">Nome *</label>
                                <input type="text" class="form-control" id="first-name" pattern="[A-Za-zÀ-ÿ ]+" title="Por favor, insira um nome válido (apenas letras)." required>
                                <div class="invalid-feedback">Por favor, insira um nome válido (apenas letras).</div>
                            </div>
                            <div class="form-group col-6">
                                <label for="last-name">Apelido *</label>
                                <input type="text" class="form-control" id="last-name" pattern="[A-Za-zÀ-ÿ ]+" title="Por favor, insira um apelido válido (apenas letras)." required>
                                <div class="invalid-feedback">Por favor, insira um apelido válido (apenas letras).</div>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <label for="phone">Contacto *</label>
                            <input type="text" class="form-control" id="phone" pattern="\d{9}" title="O número de contacto deve conter apenas dígitos e ter 9 caracteres." required>
                            <div class="invalid-feedback">Por favor, insira um número de contacto válido (9 dígitos).</div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Endereço de email *</label>
                            <input type="email" class="form-control" id="email" required>
                            <div class="invalid-feedback">Por favor, insira um email válido.</div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="address">Morada *</label>
                            <input type="text" class="form-control" id="address" placeholder="Nome da rua e número da porta" required>
                            <div class="invalid-feedback">Por favor, insira a sua morada.</div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="form-group col-6">
                                <label for="postal-code">Código postal *</label>
                                <input type="text" class="form-control" id="postal-code" required>
                                <div class="invalid-feedback">Por favor, insira o código postal.</div>
                            </div>
                            <div class="form-group col-6">
                                <label for="postal-location">Localidade do código postal *</label>
                                <input type="text" class="form-control" id="postal-location" pattern="[A-Za-zÀ-ÿ ]+" title="Por favor, insira uma localidade válida (apenas letras)." required>
                                <div class="invalid-feedback">Por favor, insira uma localidade válida (apenas letras).</div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nif">NIF</label>
                            <input type="text" class="form-control" id="nif" placeholder="Nº de Contribuinte Português">
                        </div> 
                    </form>
                </div>
                <!-- Itens do Carrinho -->
                <div class="col-md-4 col-lg-6 mb-4">
                    <h3 class= "text-center">Resumo no Carrinho</h3>
                    <div id="cart-items-checkout" class="overflow-y-auto" style="height: 70vh; padding: 20px;"></div>
                    <div id="cart-total-checkout" style="padding:20px; font-size: 25px">Total: 0 €</div>
                    <button type="submit" class="finalizar mt-4 text-white" onclick="finalizarCompra()">Finalizar Compra</button>
                </div>
            </div>
        </div>
    </main>

    <?php include('includes/footer.php') ?>

    <script src="includes/jscheckout.js"></script>

</body>
</html>