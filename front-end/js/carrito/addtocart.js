let total = 0;
var contador = 0;

// funcion para agregar al carrito todo
function agregarAlCarrito(producto, tamañoR, tipoR, tipoC, tipoE, selected, cantidad) {
    var valorUnidad = document.getElementById('costouni').textContent;
    const carritoItems = document.getElementById('shoping');
    const item = document.createElement('div');
    item.className = 'carrito-item';
    const itemPrecio = valorUnidad * cantidad;

    // agregar el archivo
    const archivoInput = document.getElementById('addfile');
    const archivo = archivoInput.files[0];

    // si hay un archivo leerlo como base 64
    let archivoBase64 = ''; 
    let archivoNombre = '';
    if (archivo) {
        archivoNombre = archivo.name;
        const reader = new FileReader();
        reader.onloadend = function() {
            archivoBase64 = reader.result; // esto contendra el archivo en base64 
            agregarItem(item, producto, tamañoR, tipoR, tipoC, tipoE, selected, cantidad, itemPrecio, archivoBase64, archivoNombre);
        };
        reader.readAsDataURL(archivo); // leer el archivo como base64
    } else {
        // si no hay archivo, simplemente agrega el item sin archivo
        agregarItem(item, producto, tamañoR, tipoR, tipoC, tipoE, selected, cantidad, itemPrecio, null, null);
    }
}

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

    const btnEliminar = item.querySelector('.btn-eliminar');
    btnEliminar.addEventListener('click', () => eliminarDelCarrito(item, itemPrecio, carrito.length - 1)); // Pasar el índice correcto
}

function eliminarDelCarrito(item, precio, index) {
    const carrito = JSON.parse(localStorage.getItem('carrito')) || [];
    carrito.splice(index, 1);  // Eliminar 1 elemento en la posición index
    localStorage.setItem('carrito', JSON.stringify(carrito));

    item.remove();
    total -= precio;
    document.getElementById('total-precio').textContent = total;
    contador -= 1;
    document.getElementById('contador').textContent = contador;
}

document.addEventListener('DOMContentLoaded', function () {
    const carritoItems = document.getElementById('shoping');
    const carrito = JSON.parse(localStorage.getItem('carrito')) || [];
    
    carrito.forEach((item, index) => {
        const div = document.createElement('div');
        div.className = 'carrito-item';
        
        div.innerHTML = `
            <ul class="listCaract">
                <li><b>${item.producto}</b></li>
                <li>Cantidad: <b>${item.cantidad}</b></li>
                <li>Tamaño: <b>${item.tamañoR}</b></li>
                <li>Tipo Remito: <b>${item.tipoR}</b></li>
                <li>Tipo Copias: <b>${item.tipoC}</b></li>
                <li>Tipo Encuadernado: <b>${item.tipoE}</b></li>
                <li>Arte <b>${item.arte}</b></li>
                <li>Archivo: <b>${item.archivoNombre ? item.archivoNombre : 'no hay archivo'}</b></li>
                ${item.archivo ? `<li><img src="${item.archivo}" alt="${item.archivoNombre}" style="max-width: 200px; height: 100px;"></li>` : ''}
                <div class="separador"></div>
                <li>Precio: <b>$${item.precio}</b></li>
            </ul>
            <button class="btn-eliminar">Eliminar</button>
        `;

        carritoItems.appendChild(div);
        
        // Actualizar el total y contador
        total += item.precio;
        contador += item.cantidad;

        // Agregar evento de eliminación
        const btnEliminar = div.querySelector('.btn-eliminar');
        btnEliminar.addEventListener('click', () => eliminarDelCarrito(div, item.precio, index));
    });

    // Actualizar el total y contador en la interfaz
    document.getElementById('total-precio').textContent = total;
    document.getElementById('contador').textContent = contador;
});