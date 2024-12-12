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
    if (archivo) {
        const reader = new FileReader();
        reader.onloadend = function() {
            archivoBase64 = reader.result; // esto contendra el archivo en base64 
            agregarItem(item, producto, tamañoR, tipoR, tipoC, tipoE, selected, cantidad, itemPrecio, archivoBase64);
        };
        reader.readAsDataURL(archivo); // leer el archivo como base64
    } else {
        // si no hay archivo, simlemente agrega el item sin archivo
        agregarItem(item, producto, tamañoR, tipoR, tipoC, tipoE, selected, cantidad, itemPrecio, null);
    }
    function agregarItem(item, producto, tamañoR, tipoR, tipoC, tipoE, selected, cantidad, itemPrecio, archivoBase64){
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
                <li>Archivo: <b>${archivoBase64 ? 'archivo seleccionado' : 'no hay archivo'}</b></li>
                <div class="separador"></div>
                <li>Precio: <b>$${itemPrecio}</b></li>
            </ul>
            <button class="btn-eliminar">Eliminar</button>    
        `;
    
        carritoItems.appendChild(item);
        
        // calculo del total al agregar un producto al carrito
        total += itemPrecio;
        document.getElementById('total-precio').textContent = total;
    
        // varible contadora de numero de productos en el carrito
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
            archivo: archivoBase64
        });
        localStorage.setItem('carrito', JSON.stringify(carrito));
    
        const btnEliminar = item.querySelector('.btn-eliminar');
        btnEliminar.addEventListener('click', () => eliminarDelCarrito(item, itemPrecio));
    }    
}


function eliminarDelCarrito(item, precio) {
    const carrito = JSON.parse(localStorage.getItem('carrito')) || [];
    const productoIndex = Array.from(item.parentNode.children).indexOf(item);
    carrito.splice(productoIndex, 1);  // Eliminar 1 elemento en la posición productoIndex
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
    
    carrito.forEach(item => {
        const div = document.createElement('div');
        div.className = 'carrito-item';

        // mostrar la información
        div.innerHTML = `
            <ul class="listCaract">
                <li><b>${item.producto}</b></li>
                <li>Cantidad: ${item.cantidad}</li>
                <li>Tamaño: ${item.tamañoR}</li>
                <li>Tipo Remito: ${item.tipoR}</li>
                <li>Tipo Copias: ${item.tipoC}</li>
                <li>Tipo Encuadernado: ${item.tipoE}</li>
                <li>Arte: ${selected}</li>
                <li>Archivo: ${archivoBase64 ? 'archivo adjunto' : 'no hay archivo'}</li>
                <li>Precio: $${item.precio}</li>
            </ul>
            <button class="btn-eliminar">Eliminar</button>
        `;

        carritoItems.appendChild(div);
        total += item.precio;

        contador += 1;

        const btnEliminar = div.querySelector('.btn-eliminar');
        btnEliminar.addEventListener('click', () => eliminarDelCarrito(div, item.precio));
    });

    document.getElementById('total-precio').textContent = total;
});