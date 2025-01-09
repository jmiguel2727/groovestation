// Função para gerar um ID aleatório
function generateRandomId(length = 8) {
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    let result = '';
    for (let i = 0; i < length; i++) {
        result += characters.charAt (Math.floor(Math.random() * characters.length));
    }
    return result;
}

// Recuperar o compra_id da localStorage
const compraId = localStorage.getItem('compraId');

// Preencher o campo compraId no formulário de checkout
document.getElementById('compraId').value = compraId;

// Caso não exista, gerar um novo compra_id
if (!compraId) {
    const newCompraId = generateRandomId();
    localStorage.setItem('compraId', newCompraId);
    document.getElementById('compraId').value = newCompraId;
}

// Função para atualizar o resumo do carrinho
function updateCartSummary() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartItemsContainer = document.getElementById('cart-items-checkout');
    const cartTotalContainer = document.getElementById('cart-total-checkout');
    let total = 0;

    cartItemsContainer.innerHTML = ''; // Limpa os itens do carrinho

    cart.forEach(item => {
        const itemTotal = item.price * item.quantity;
        total += itemTotal;

        cartItemsContainer.innerHTML += `
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div>${item.name}: ${item.quantity}x = ${itemTotal}€</div>
            </div>
        `;
    });

    cartTotalContainer.innerHTML = `Total: ${total} €`;
}
function clearLocalStorageAndRedirect() {
// Limpa o localStorage
localStorage.removeItem('cart');
localStorage.removeItem('compraId');

// Redireciona para a página index.php
window.location.href = 'index.php?compra_finalizada=true';
}

// Chama a função para atualizar o resumo do carrinho ao carregar a página
updateCartSummary();