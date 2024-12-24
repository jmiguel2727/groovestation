// Função para abrir a sidebar
function openSideBar() {
    document.getElementById("mySidebar").style.display = "block";
    updateCart();
}

// Função para fechar a sidebar
function closeSidebar() {
    document.getElementById("mySidebar").style.display = "none";
}

// Função para adicionar item ao carrinho
function addToCart(id, name, price) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    const itemIndex = cart.findIndex(item => item.id === id);

    if (itemIndex > -1) {
        cart[itemIndex].quantity += 1; // Incrementa a quantidade se já existir
    } else {
        cart.push({ id, name, price, quantity: 1 }); // Adiciona novo item
    }

    localStorage.setItem('cart', JSON.stringify(cart));
    updateCart();
}

// Função para atualizar a sidebar do carrinho
function updateCart() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartItemsContainer = document.getElementById('cart-items');
    const cartTotalContainer = document.getElementById('cart-total');
    const cartCountContainer = document.getElementById('cart-count'); 
    
    cartItemsContainer.innerHTML = ''; // Limpa os itens do carrinho
    let total = 0;
    let totalItems = 0; // Variável para contar o total de itens

    cart.forEach((item, index) => {
        const itemTotal = item.price * item.quantity;
        total += itemTotal;
        totalItems += item.quantity; // Incrementa o total de itens
        cartItemsContainer.innerHTML += `
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div>
                    ${item.name}: ${item.quantity}x  = ${itemTotal}€
                </div>
                <button class="btn btn-sm" onclick="removeFromCart(${index})">
                    <i class="bi bi-trash3"></i>
                </button>
            </div>
        `;
    });

    cartTotalContainer.innerHTML = `Total: ${total} €`;
    
    // Contador de items carrinho
    const cartCountLarge = document.getElementById('cart-count'); // Contador para telas grandes
    const cartCountSmall = document.getElementById('cart-count-small'); // Contador para telas pequenas
    const displayCount = totalItems > 0 ? totalItems : '';
    // Atualiza ambos os contadores
    cartCountLarge.textContent = displayCount;
    cartCountSmall.textContent = displayCount;
}

// Função para remover 1 item do carrinho
function removeFromCart(index) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    
    if (cart[index].quantity > 1) {
        cart[index].quantity -= 1; // Diminui a quantidade se for maior que 1
    } else {
        cart.splice(index, 1); // Remove o item se a quantidade for 1
    }
    
    localStorage.setItem('cart', JSON.stringify(cart)); // Atualiza o localStorage
    updateCart(); // Atualiza a exibição do carrinho
}

// Chama a função para atualizar o carrinho ao carregar a página
document.addEventListener('DOMContentLoaded', updateCart);
