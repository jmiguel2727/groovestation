// Função para carregar os itens do carrinho no checkout
function loadCartItems() {
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
    document.getElementById('cartItems').value = JSON.stringify(cart); // Preenche o input oculto
    document.getElementById('compraId').value = localStorage.getItem('compraId'); // Preenche o input oculto para o compraId
}

// Função para validar se o carrinho está vazio antes de enviar o formulário
function validateCartBeforeSubmit(event) {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];

    if (cart.length === 0) {
        event.preventDefault(); // Impede o envio do formulário
        alert('O carrinho está vazio. Adicione itens ao carrinho antes de finalizar a compra.');
    }
}

// Adiciona o evento de validação ao formulário
document.addEventListener('DOMContentLoaded', function () {
    const billingForm = document.getElementById('billing-form');

    // Carrega os itens do carrinho ao carregar a página
    loadCartItems();

    // Adiciona o listener para validar o carrinho antes de enviar o formulário
    if (billingForm) {
        billingForm.addEventListener('submit', validateCartBeforeSubmit);
    }
});