<?php 

    
    // Aquí puedes hacer algo con el valor recibido, por ejemplo:

    // Guardar en base de datos
    // $query = "INSERT INTO tu_tabla (total) VALUES ('$receivedTotal')";
    // mysqli_query($conn, $query);

    // Enviar un correo electrónico
    // mail("quicenolondonoj@gmail.com", "Nuevo total", "El total es: " . $receivedTotal);


?>
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
        <div class="volver">
            <a href="homecomer.html">
                <div>
                    <i class="fa-solid fa-arrow-left fa-2x" style="color: #b8c66c;"></i>
                </div>
            </a>
        </div>
        <div class="productImg">
            <img src="../img/gf-imp3.jpg" alt="">
        </div>
        <div class="costos">
            <div>
                <h1 class="tittles">Remitos</h1>
            </div>
            <form method="post" action="productos.php">
                <div class="perso">
                    <div>
                        <h4 class="light">Tamaño del remito</h4>
                        <select class="select tamañoRemito" name="tamañoRemito" id="">
                            <option value=""></option>
                            <option value="Pequeño">Pequeño</option>
                            <option value="Mediano">Mediano</option>
                            <option value="Grande">Grande</option>
                        </select>
                    </div>
                    <div>
                        <h4 class="light">Tipo del Remito</h4>
                        <select class="select tipoRemito" name="tipoRemito" id="">
                            <option value=""></option>
                            <option value="remito-x">Remito X</option>
                            <option value="remito-l">Remito L</option>
                        </select>
                    </div>
                    <div>
                        <h4 class="light">Tipo de copias</h4>
                        <select class="select tipoCopias" name="tipoCopias" id="">
                            <option value=""></option>
                            <option value="duplicado">Duplicado</option>
                            <option value="triplicado">Triplicado</option>
                        </select>
                    </div>
                    <div>
                        <h4 class="light">Encuadernado</h4>
                        <select class="select tipoEncuadernado" name="tipoEncuadernado" id="">
                            <option value=""></option>
                            <option value="emblocado">Emblocado</option>
                            <option value="sueltas">Hojas Sueltas</option>
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
            </form>
            <br><br>
            <div>
                <h1>Valor unitario: </h1>
                <p id="costouni"></p>
                <br>
                <hr>
                <br>
                <h2>Total: </h2>
                <p id="totalValue"></p>
                <hr>
                <br>
                <h2>Variable de php: </h2>
                <p>
                   <?php
                        if (isset($_POST['total'])) {
                            $receivedTotal = $_POST['total'];
                        }
                        echo $receivedTotal;
                   ?>
                </p>
            </div>
            <script>
                var tamañoRemito = document.querySelector(".tamañoRemito");
                var tipoRemito = document.querySelector(".tipoRemito");
                var tipoCopias = document.querySelector(".tipoCopias");
                var tipoEncuadernado = document.querySelector(".tipoEncuadernado");
                const costo = 100
                // Función para actualizar el valor en el HTML
                function actualizarTotal() {
                    var descuento;
                    var total = 100;

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

                    // asignacion del total
                    const totalValueElement = document.getElementById("totalValue");
                    totalValueElement.innerText = total;
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

            </script>
            
        </div>
    </section>
    <section class="atuMedida">
        <div class="curvo">
            <h2>>Necesitas cotizacion a medida?</h2>
        </div>
        <svg class="svg1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,64L48,96C96,128,192,192,288,197.3C384,203,480,149,576,106.7C672,64,768,32,864,53.3C960,75,1056,149,1152,181.3C1248,213,1344,203,1392,197.3L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
        <svg class="svg2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    <div class="text-recomendaciones">
        <div class="int-text-recom">
            <h2 class="tittles"><span class="light">¡Recomendaciones</span>Para Ti!</h2>
        </div>
    </div>
    <br>
    <div class="separador-hor"></div>
    <section class="recomendaciones">
        <div class="slider">
            <div class="slides">
                <div class="slide"><img src="image1.jpg" alt="Imagen 1"></div>
                <div class="slide"><img src="image2.jpg" alt="Imagen 2"></div>
                <div class="slide"><img src="image3.jpg" alt="Imagen 3"></div>
                <div class="slide"><img src="image4.jpg" alt="Imagen 4"></div>
                <div class="slide"><img src="image5.jpg" alt="Imagen 5"></div>
                <div class="slide"><img src="image6.jpg" alt="Imagen 6"></div>
                <div class="slide"></div>
                <div class="slide"></div>
                <div class="slide"></div>
                <div class="slide"></div>
            </div>
            <div class="controls">
                <button class="control prev"><i class="fa-solid fa-arrow-right fa-flip-both fa-2x" style="color: black;"></i></button>
                <button class="control next"><i class="fa-solid fa-arrow-right fa-2x" style="color: black;"></i></button>
            </div>
            <div class="indicators">
                <div class="indicator"></div>
                <div class="indicator"></div>
                <div class="indicator"></div>
                <div class="indicator"></div>
                <div class="indicator"></div>
                <div class="indicator"></div>
                <div class="indicator"></div>
                <div class="indicator"></div>
                <div class="indicator"></div>
                <div class="indicator"></div>
            </div>
        </div>
        <script>
            let index = 0;
            const slides = document.querySelector('.slides');
            const totalSlides = document.querySelectorAll('.slide').length;
            const prevButton = document.querySelector('.prev');
            const nextButton = document.querySelector('.next');
            const indicators = document.querySelectorAll('.indicator');

            function updateSlider() {
                slides.style.transform = `translateX(${-index * 30}%)`;
                indicators.forEach((indicator, i) => {
                    indicator.classList.toggle('active', i === index);
                });
            }

            prevButton.addEventListener('click', () => {
                index = (index - 1 + totalSlides) % totalSlides;
                updateSlider();
            });

            nextButton.addEventListener('click', () => {
                index = (index + 1) % totalSlides;
                updateSlider();
            });

            indicators.forEach((indicator, i) => {
                indicator.addEventListener('click', () => {
                    index = i;
                    updateSlider();
                });
            });

            let autoSlide = setInterval(() => {
                index = (index + 1) % totalSlides;
                updateSlider();
            }, 3000);

            document.querySelector('.slider').addEventListener('mouseover', () => {
                clearInterval(autoSlide);
            });

            document.querySelector('.slider').addEventListener('mouseout', () => {
                autoSlide = setInterval(() => {
                    index = (index + 1) % totalSlides;
                    updateSlider();
                }, 3000);
            });

            updateSlider();
        </script>
    </section>
    <section class="footter">
        <div class="foot-interior">
            <div class="fot-info" id="info1">
                <div>
                    <img src="../img/iconos/ipbe.png" alt="" class="logo-solida-fot">
                </div>
                <div>
                    <p class="">Somos Sólida, una empresa apasionada por la creatividad y la innovación en el mundo de las comunicaciones, el mercadeo y la producción de impresos.</p>
                </div>
            </div>
            <div class="fot-info" id="info2">
                <div class="fot-titulos-internos">
                    <h3>MARCAS <span class="light">SÓLIDAS</span></h3>
                </div>
                <div>
                    <ul>
                        <li><a href="#posicion">MONTECASINO</a></li>
                        <li><a href="#posicion">CORPOASES</a></li>
                        <li><a href="#posicion">FUNDACIÓN HUELLAS DEL AYER</a></li>
                        <li><a href="#posicion">ARRULLA</a></li>
                        <li><a href="#posicion">ONDAS</a></li>
                        <li><a href="#posicion">AURUM</a></li>                            <li><a href="#posicion">SPOT SERVICIOS</a></li>
                        <li><a href="#posicion">CENTRO EDUCATIVO MELODÍAS</a></li>
                    </ul>
                </div>
            </div>
            <div class="fot-info" id="info3">
                <div class="fot-titulos-internos">
                    <h3>CONTACTO</h3>
                </div>
                <div>
                    <ul>
                        <div class="fot-flex">
                            <div>
                                <img src="front-end/img/iconos/ubi.png" alt="" class="footer-iconos">
                            </div>
                            <div>
                                <a href="https://maps.app.goo.gl/NkUMMBjKmGbwSTrk6" target="_blank"><p>Cra. 41A #27 A sur 86 - Centro Ejecutivo La Casona Envigado - Oficina 102</p></a>
                            </div>
                        </div>
                        <div class="fot-flex">
                            <div>
                                <img src="front-end/img/iconos/mail.png" alt="" class="footer-iconos">
                            </div>
                            <div>
                                <p>gestion@solidasas.com</p>
                            </div>
                        </div>
                        <div class="fot-flex">
                            <div>
                                <img src="front-end/img/iconos/wats.png" alt="" class="footer-iconos">
                            </div>
                            <div>
                                <!--<a href=""><p>+57 324 569 36 94</p></a>-->
                                <p>+57 324 569 36 94</p>
                            </div>
                        </div>
                        <div class="fot-flex">
                            <div>
                                <img src="front-end/img/iconos/time.png" alt="" class="footer-iconos">
                            </div>
                            <div>
                                <p>Lunes a viernes de 8:00 a.m. a 5:00 p.m.</p>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="fot-info" id="info4">
                <div class="fot-titulos-internos">
                    <h3>SÍGUENOS</h3>
                </div>
                <div>
                    <div class="fot-flex">
                        <div>
                            <img src="front-end/img/iconos/in.png" alt="" class="footer-iconos">
                        </div>
                        <div>
                            <a href="https://co.linkedin.com/company/s%C3%B3lida-sas" target="_blank"><p>Linkedin</p></a><br>
                            <!--<a href="https://www.instagram.com/solida360_?igsh=MWFlZW9iaTJ0N3NuMQ%3D%3D"><p>Instagram</p></a>-->
                            <!--<a href="https://www.tiktok.com/@solida.360?_t=8mP23a76KLV&_r=1"><p>Tik Tok</p></a>-->
                        </div>
                    </div>
                    <div class="fot-flex">
                        <div>
                            <img src="front-end/img/iconos/igblanco.png" alt="" class="footer-iconos">
                        </div>
                        <div>
                            <a href="https://www.instagram.com/solida360_?igsh=MWFlZW9iaTJ0N3NuMQ%3D%3D" target="_blank"><p>Instagram</p></a>
                        </div>
                    </div>
                    <div class="fot-flex">
                        <div>
                            <img src="front-end/img/iconos/ttblanco.png" alt="" class="footer-iconos">
                        </div>
                        <div>
                            <a href="https://www.tiktok.com/@solida.360?_t=8mP23a76KLV&_r=1" target="_blank"><p>Tik Tok</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
    	AOS.init()
	</script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
</body>
</html>