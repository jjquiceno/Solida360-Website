const minusCant = document.querySelector('.minuscant');
const plusCant = document.querySelector('.pluscant');
var cantidad = document.querySelector('.cant');

function actualizarCantidad() {
    var cantidadValue = parseInt(cantidad.value);

    minusCant.addEventListener('click', () => {
        if (cantidad > 1) {
            cantidadValue -= 1
            cantidad.value = cantidadValue
        }
    });
    plusCant.addEventListener('click', () => {
        cantidadValue = cantidadValue + 1
        cantidadValue = cantidadValue
    });

    const totalCantidad = document.getElementById("cajacantidad");
    totalCantidad.innerText = cantidadValue;
}


