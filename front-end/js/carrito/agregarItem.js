function agregarItem(item, producto, tamañoR, tipoR, tipoC, tipoE, selected, cantidad, itemPrecio, archivoBase64, archivoNombre) {
    // mostrar la información
    item.innerHTML = `
        <ul class="listCaract">
            <li><b>${producto}</b></li>
            <li>Cantidad: <b>${cantidad}</b></li>
            <li>Tamaño: <b>${tamañoR}</b></li>
            <li>Tipo Remito: <b>${tipoR}</b></li>
            <li>Tipo Copias: <b>${tipoC}</b></li>
            <li>Tipo Encuadernado: <b>${tipoE}</b></li>
            <li>Arte <b>${selected}</b></li>
            <li>Archivo: <b>${archivoNombre ? archivoNombre : 'no hay archivo'}</b></li>
            ${archivoBase64 ? `<li><img src="${archivoBase64}" alt="${archivoNombre}" style="max-width: 200px; height: 100px;"></li>` : ''}
            <div class="separador"></div>
            <li>Precio: <b>$${itemPrecio}</b></li>
        </ul>
        <button class="btn-eliminar">Eliminar</button>    
    `;

    const carritoItems = document.getElementById('shoping');
    carritoItems.appendChild(item);

    // calculo del total al agregar un producto al carrito
    total += itemPrecio;
    document.getElementById('total-precio').textContent = total;

    // variable contadora de numero de productos en el carrito
    contador += 1;
    document.getElementById('contador').textContent = contador;

    // Guardar el carrito en localStorage
    let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
    carrito.push({
        producto,
        tamañoR,
        tipoR,
        tipoC,
        tipoE,
        cantidad,
        precio: itemPrecio,
        archivo: archivoBase64,
        archivoNombre
    });
    localStorage.setItem('carrito', JSON.stringify(carrito));

    localStorage.setItem('total', total);
    localStorage.setItem('contador', contador);

    const btnEliminar = item.querySelector('.btn-eliminar');
    btnEliminar.addEventListener('click', () => eliminarDelCarrito(item, itemPrecio, carrito.length - 1)); // Pasar el índice correcto
}
