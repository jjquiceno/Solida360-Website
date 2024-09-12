<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/iconos/logo-solida.png">
    <!-- <link rel="stylesheet" href="../front-end/css/menu-ham.css"> -->
    <link rel="stylesheet" href="../css/solidacomercial/products.css">
    <link rel="stylesheet" href="../css/solidacomercial/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Sólida</title>
</head>
<body>
    <div class="header">
        <div class="header-grid">
            <div class="logo-box">
                <a href="../../index.html">
                    <img class="logo" src="../img/iconos/ICONO CON PUNTOS.png" alt="">
                </a>
            </div>
            <div class="containerGrid">
                <div style="position: relative;">
                    <input type="text" class="busqueda tittles" name="search" placeholder="buscar productos">
                </div>
                <div class="conttt">
                    <img class="carrito" src="../img/iconos/carrito.png" alt="">
                </div>
                <div class="wish-list">
                    <div class="exs">
                        <i id="cerrar" class="fa-solid fa-xmark fa-2x"></i>
                    </div>
                    <div class="shoping">

                    </div>
                </div>
                <script>
                    const carrito = document.querySelector(".conttt");
                    const wishList = document.querySelector(".wish-list");
                    const cerrar = document.getElementById("cerrar");
                    carrito.addEventListener("click", () => {
                        carrito.classList.toggle("active");
                        wishList.classList.toggle("active");
                    });
                    cerrar.addEventListener("click", () => {
                        cerrar.classList.toggle("active");
                        wishList.classList.toggle("active");
                    })
                </script>
            </div>
        </div>
        <nav class="nav2">
            <ul class="listas">
                <li class="relative-menu">
                    <a href="">Imprenta</a>
                    <ul class="hiden-menu">
                        <div class="columns">
                            <div>
                                <li><a href=""><h3 class="tittles">Papeleria Comercial</h3></a></li>
                                
                                <li><a href="productos.php">Remito</a></li>
                                <li><a href="">Tarjetas Personalizadas</a></li>
                                <li><a href="">Tacos</a></li>
                                <li><a href="">Carpetas de presentación</a></li>
                                <li><a href="">Hojas de membersias</a></li>
                                <li><a href="">Recetarrios / Talonarios</a></li>
                            </div>
                            <div>
                                <li><a href=""><h3 class="tittles">Sobres</h3></a></li>
                                
                                <li><a href="">sobres con tu logo</a></li>
                                <li><a href="">sobre porta tarjeta</a></li>
                                <li><a href="">sobre largo</a></li>
                                <li><a href="">sobre tipo bolsa</a></li>
                            </div>
                        </div>
                        <div class="columns">
                            <div>
                                <li><a href=""><h3 class="tittles">Folleteria</h3></a></li>
                                
                                <li><a href="">volantes</a></li>
                                <li><a href="">Dipticos</a></li>
                                <li><a href="">Tripticos</a></li>
                                <li><a href="">Cuadripticos</a></li>
                                <li><a href="">Cuadripticos Extralargos</a></li>
                            </div>
                            <div>
                                <li><a href=""><h3 class="tittles">Gremio Gráfico</h3></a></li>
                                
                                <li><a href="">Bajadas XL</a></li>
                                <li><a href="">Bajadas Láser</a></li>
                                <li><a href="">Bajadas Offset</a></li>
                                <li><a href="">Estampado DTF</a></li>
                                <li><a href="">Impresipon DTF textil por metro</a></li>
                                <li><a href="">Impresión lona, vinilo, papel y tela</a></li>
                                <!-- <li><a href="">Estampado DTF</a></li> -->
                            </div>
                        </div>
                    </ul>
                </li>
                <li class="relative-menu">Carteleria</li>
                <li class="relative-menu">Cajas y Bolsas</li>
                <li class="relative-menu">Merchandising</li>
                <li class="relative-menu">Ideas</li>
                <li class="relative-menu">Deco & Gift</li>
                <li class="relative-menu">Cotizacion a Medida</li>
            </ul>
        </nav>

    </div>
    <section class="productDetail">
        <div class="productImg">
            <img src="../img/gf-imp3.jpg" alt="">
        </div>
        <div class="costos">
            <div>
                <h1 class="tittles">Remitos</h1>
            </div>
            <div class="perso">
                <div>
                    <h4 class="light">Tamaño del remito</h4>
                    <select class="select tamañoRemito" name="" id="">
                        <option value=""></option>
                        <option value="Pequeño">Pequeño</option>
                        <option value="Mediano">Mediano</option>
                        <option value="Grande">Grande</option>
                    </select>
                </div>
                <div>
                    <h4 class="light">Tipo del Remito</h4>
                    <select class="select tipoRemito" name="" id="">
                        <option value=""></option>
                        <option value="remito-x">Remito X</option>
                        <option value="remito-l">Remito L</option>
                    </select>
                </div>
                <div>
                    <h4 class="light">Tipo de copias</h4>
                    <select class="select tipoCopias" name="" id="">
                        <option value=""></option>
                        <option value="duplicado">Duplicado</option>
                        <option value="triplicado">Triplicado</option>
                    </select>
                </div>
                <div>
                    <h4 class="light">Encuadernado</h4>
                    <select class="select" name="" id="">
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>
                <div>
                    <h4 class="light">Impresión</h4>
                    <select class="select" name="" id="">
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>
                <div>
                    <h4 class="light">papel Interior</h4>
                    <select class="select" name="" id="">
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>
            </div>
            <div>
                <h1>Valor unitario: </h1>
                <p></p>
                <hr>
                <h2>Total: </h2>
                <p id="totalValue"></p>
            </div>
            <script>
                var tamañoRemito = document.querySelector(".tamañoRemito");
                var tipoRemito = document.querySelector(".tipoRemito");
                var tipoCopias = document.querySelector(".tipoCopias");
                
                const costo = 100
                // Función para actualizar el valor en el HTML
                function actualizarTotal() {
                    var descuento;
                    var total = 100;

                    // Obtener el valor de los select
                    var tamañoRemitoValor = tamañoRemito.value; 
                    var tipoRemitoValor = tipoRemito.value;
                    var tipoCopiasValor = tipoCopias.value;

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

                    // asignacion del total
                    const totalValueElement = document.getElementById("totalValue");
                    totalValueElement.innerText = total;
                }
                
                // Añadir evento para actualizar el valor cuando se cambie la selección
                tamañoRemito.addEventListener("change", actualizarTotal);
                tipoRemito.addEventListener("change", actualizarTotal);
                tipoCopias.addEventListener("change", actualizarTotal);
            </script>
        </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    	<script>
        	AOS.init()
    	</script>
</body>
</html>