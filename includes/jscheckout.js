function loadCartForCheckout() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartItemsContainer = document.getElementById('cart-items-checkout');
    const cartTotalContainer = document.getElementById('cart-total-checkout');

    cartItemsContainer.innerHTML = ''; // Limpa os itens do carrinho
    let total = 0;

    if (cart.length === 0) {
        cartItemsContainer.innerHTML = '<p>O seu carrinho está vazio.</p>';
    } else {
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
}

function finalizarCompra() {
    alert("Compra finalizada com sucesso!");
    localStorage.removeItem('cart'); // Limpa o carrinho
    window.location.href = 'index.php'; // Redireciona para a página inicial
}

// Carregar o carrinho no checkout quando a página for carregada
document.addEventListener('DOMContentLoaded', loadCartForCheckout);
