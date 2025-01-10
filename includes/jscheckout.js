// Função para carregar os itens do carrinho
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

// Carrega os itens do carrinho ao carregar a página
document.addEventListener('DOMContentLoaded', loadCartItems);