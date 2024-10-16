let total = 0;
        
function agregarAlCarrito(producto, tamañoR, tipoR, tipoC, tipoE, cantidad) {
    const carritoItems = document.getElementById('shoping');
    const item = document.createElement('div');
    item.className = 'carrito-item';
    const itemPrecio = 10 * cantidad;
    item.textContent = `${producto} - Cantidad: ${cantidad}, Tamaño: ${tamañoR}, Tipo Remito: $${tipoR}, tipo copias: ${tipoC}, tipo Encuadernado: ${tipoE}, cantidad: ${cantidad}, total: ${itemPrecio}`;
    carritoItems.appendChild(item);
        
    total += itemPrecio;
    document.getElementById('total-precio').textContent = total;
}