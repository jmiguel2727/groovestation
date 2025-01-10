// Função para gerar um ID aleatório
function generateRandomId(length = 8) {
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    let result = '';
    for (let i = 0; i < length; i++) {
        result += characters.charAt(Math.floor(Math.random() * characters.length));
    }
    return result;
}

// Função para abrir a sidebar do carrinho
function openSideBar() {
    document.getElementById("mySidebar").style.display = "block";
    updateCart();
}

// Função para fechar a sidebar do carrinho
function closeSidebar() {
    document.getElementById("mySidebar").style.display = "none";
}

// Função para adicionar item ao carrinho
function addToCart(id, name, price) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    const itemIndex = cart.findIndex(item => item.id === id);

    // Verifica se já existe um compra_id na localStorage
    let compraId = localStorage.getItem('compraId');
    if (!compraId) {
        compraId = generateRandomId(); // Gera um novo compra_id
        localStorage.setItem('compraId', compraId); // Armazena o compra_id na localStorage
    }

    if (itemIndex > -1) {
        cart[itemIndex].quantity += 1; // Incrementa a quantidade se já existir
    } else {
        cart.push({ id, name, price, quantity: 1, compraId }); // Adiciona novo item com compra_id
    }

    localStorage.setItem('cart', JSON.stringify(cart));
    updateCart();
}

// Função para remover item do carrinho (apenas do localStorage)
function removeFromCart(index) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    if (cart[index].quantity > 1) {
        cart[index].quantity -= 1; // Diminui a quantidade se for maior que 1
    } else {
        cart.splice(index, 1); // Remove o item se a quantidade for 1
    }

    localStorage.setItem('cart', JSON.stringify(cart));
    updateCart();
}

// Função para atualizar a sidebar do carrinho
function updateCart() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartItemsContainer = document.getElementById('cart-items');
    const cartTotalContainer = document.getElementById('cart-total');
    let total = 0;

    cartItemsContainer.innerHTML = ''; // Limpa os itens do carrinho

    cart.forEach((item, index) => {
        const itemTotal = item.price * item.quantity;
        total += itemTotal;

        cartItemsContainer.innerHTML += `
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div>${item.name}: ${item.quantity}x = ${itemTotal}€</div>
                <button class="btn btn-sm" onclick="removeFromCart(${index})">
                    <i class="bi bi-trash3"></i>
                </button>
            </div>
        `;
    });

    cartTotalContainer.innerHTML = `Total: ${total} €`;
}

// Atualiza o carrinho ao carregar a página
document.addEventListener('DOMContentLoaded', updateCart);