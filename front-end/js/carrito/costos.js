// inicializacion de variables para el calculo del precio total
var tamañoRemito = document.querySelector(".tamañoRemito");
var tipoRemito = document.querySelector(".tipoRemito");
var tipoCopias = document.querySelector(".tipoCopias");
var tipoEncuadernado = document.querySelector(".tipoEncuadernado");
const costo = document.getElementById('valorproducto').textContent;

// inicializacion de variables para la cntidad de unidades del producto
const minusCantButton = document.querySelector('.minuscant');
const plusCantButton = document.querySelector('.pluscant');
var cantValue = document.querySelector('.cant');
var calcCantValue = parseInt(cantValue.value);

// funcion para ctualizar cantidad de unidades del producto
function actualziarCantidad(){
    minusCantButton.addEventListener('click', () => {
        if (calcCantValue > 1) {
            calcCantValue -= 1
            cantValue.value = calcCantValue;
            actualizarTotal();
        }
    })
    plusCantButton.addEventListener('click', () => {
        calcCantValue += 1
        cantValue.value = calcCantValue;
        actualizarTotal();
    })
    cantValue.addEventListener('input', () => {
        calcCantValue = parseInt(cantValue.value);
        actualizarTotal();
    })
}
actualziarCantidad();

// Función para actualizar el valor en el HTML
function actualizarTotal() {
    var descuento;
    var total = document.getElementById('valorproducto').textContent;
    var valorUnitario;

    // Obtener el valor de los select
    var tamañoRemitoValor = tamañoRemito.value; 
    var tipoRemitoValor = tipoRemito.value;
    var tipoCopiasValor = tipoCopias.value;
    var tipoEncuadernadoValor = tipoEncuadernado.value;

    // calcular el tamaño del remito
    if (tamañoRemitoValor == "Pequeño") {
        descuento = total * 0.10;
        total = total - descuento;
    } else if (tamañoRemitoValor == "Mediano") {
        descuento = total * 0.20;
        total = total - descuento;
    } else if (tamañoRemitoValor == "Grande") {
        descuento = total * 0.30;
        total = total - descuento;
    }
    
    // calcular el tipo del remito
    if (tipoRemitoValor == "remito-x") {
        total = total - (costo * 0.05);
    } else if (tipoRemitoValor == "remito-l") {
        total = total - (costo * 0.02);
    }

    // calcular el tipode copias
    if (tipoCopiasValor == "duplicado") {
        total = total + (costo * 0.03);
    } else if (tipoCopiasValor == "triplicado") {
        total = total + (costo * 0.06)
    }

    // calcular el tipo de encuadernado
    if (tipoEncuadernadoValor == "emblocado") {
        total = total + (costo * 0.01)
    } else if (tipoEncuadernadoValor == "sueltas") {
        total = total
    }

    // calculo del total segun cantidad de productos
    total = total * calcCantValue
    valorUnitario = total /calcCantValue

    // asignacion del total
    const totalValueElement = document.getElementById("totalValue");
    totalValueElement.innerText = total;

    // asignacion del valor unitario
    const escribirValorUnidad = document.getElementById("costouni");
    escribirValorUnidad.innerText = valorUnitario; 
}

// Añadir evento para actualizar el valor cuando se cambie la selección
tamañoRemito.addEventListener("change", actualizarTotal);
tipoRemito.addEventListener("change", actualizarTotal);
tipoCopias.addEventListener("change", actualizarTotal);
tipoEncuadernado.addEventListener("change", actualizarTotal);

// Usamos AJAX para enviar esta variable a PHP
$.ajax({
    url: 'productos.php', // Archivo PHP que procesará la variable
    type: 'POST',
    data: { total: total },
    success: function(response) {
        console.log("Respuesta de PHP: " + response);
    }
});

// carrito
