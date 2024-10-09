// Función para mostrar/ocultar el carrito
// function toggleCart() {
//     const cartItems = document.querySelector('.cart-items');
//     cartItems.style.display = cartItems.style.display === 'block' ? 'none' : 'block';
// }

// Función para actualizar el contador del carrito
function updateCartCount() {
    const cart = JSON.parse(localStorage.getItem('cart')) || {};
    const itemCount = Object.values(cart).reduce((sum, item) => sum + item.quantity, 0);
    document.getElementById('cart-count').textContent = itemCount;
}

// Función para actualizar el carrito en el header
function updateCart() {
    const cart = JSON.parse(localStorage.getItem('cart')) || {};
    const cartItems = document.querySelector('.cart-items');
    cartItems.innerHTML = '';
    let total = 0;
    for (const [name, item] of Object.entries(cart)) {
        const itemElement = document.createElement('div');
        itemElement.classList.add('cart-item');
        itemElement.innerHTML = `
            <span>${name} (x${item.quantity})</span>
            <span>$${(item.price * item.quantity).toFixed(2)}</span>
            <p>${item.description}</p>
            <button onclick="toggleDetails('${name}')">Ver Detalles</button>
            <button onclick="removeItem('${name}')">Remove</button>
            <div class="details" id="details-${name}">
                <p>Características: ${item.features}</p>
            </div>
        `;
        cartItems.appendChild(itemElement);
        total += item.price * item.quantity;
    }
    const totalElement = document.createElement('div');
    totalElement.classList.add('total');
    totalElement.innerHTML = `Total: $${total.toFixed(2)}`;
    cartItems.appendChild(totalElement);
}

// Función para mostrar/ocultar detalles del producto
function toggleDetails(name) {
    const detailsElement = document.getElementById(`details-${name}`);
    if (detailsElement.style.display === 'none' || detailsElement.style.display === '') {
        detailsElement.style.display = 'block';
    } else {
        detailsElement.style.display = 'none';
    }
}

// Función para eliminar un producto del carrito
function removeItem(name) {
    const cart = JSON.parse(localStorage.getItem('cart')) || {};
    if (cart[name]) {
        cart[name].quantity -= 1;
        if (cart[name].quantity === 0) {
            delete cart[name];
        }
    }
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCart();
    updateCartCount();
}