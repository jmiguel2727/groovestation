// Carregar o carrinho para exibição
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
                <div>${item.name}: ${item.quantity}x = ${itemTotal}€</div>
            `;
        });

        cartTotalContainer.innerHTML = `Total: ${total} €`;
    }
}

// Finalizar compra
function finalizarCompra() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const formData = new FormData(document.getElementById('billing-form'));

    if (cart.length === 0) {
        alert("O carrinho está vazio. Adicione produtos antes de finalizar a compra.");
        return;
    }

    const cliente = {
        nome: formData.get('nome'),
        apelido: formData.get('apelido'),
        email: formData.get('email'),
        morada: formData.get('morada'),
        codigoPostal: formData.get('codigoPostal'),
        localidade: formData.get('localidade'),
        nif: formData.get('nif')
    };

    fetch('finalizar_compra.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ cliente, cart })
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert(data.message);
                localStorage.removeItem('cart'); // Limpa o carrinho
                window.location.href = 'index.php'; // Redireciona para a página inicial
            } else {
                alert("Erro: " + (data.error || "Não foi possível finalizar a compra."));
            }
        })
        .catch(error => {
            console.error("Erro ao finalizar a compra:", error);
            alert("Erro ao comunicar com o servidor. Tente novamente mais tarde.");
        });
}

// Inicializar a página
document.addEventListener('DOMContentLoaded', () => {
    loadCartForCheckout();
    document.getElementById('finalizar-compra').addEventListener('click', finalizarCompra);
});
