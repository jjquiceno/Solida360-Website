<!-- document.getElementById('addtocartbutton').addEventListener('click', function(event) {
    const form = document.getElementById('producto');

    if (!form.checkValidity()) {
        event.preventDefault();
        alert("por favor complete todos los campos");
    } else {
        this.classList.add('rebotar');
        setTimeout(() => {
            this.classList.remove('rebotar');
        }, 500);

        agregarAlCarrito('Remito', document.querySelector('.tamañoRemito').value, document.querySelector('.tipoRemito').value, document.querySelector('.tipoCopias').value, document.querySelector('.tipoEncuadernado').value, document.getElementById('cajacantidad').value)
    }
}) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/iconos/logo-solida.png">
    <!-- <link rel="stylesheet" href="../front-end/css/menu-ham.css"> -->
    <link rel="stylesheet" href="../css/solidacomercial/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/solidacomercial/hcomer.css">
    <link rel="stylesheet" href="../css/scroll.css">
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
                        <p>Productos (<span id="contador"></span>)</p>
                        <i id="cerrar" class="fa-solid fa-xmark fa-2x"></i>
                    </div>
                    <div id="shoping">
                    
                    </div>
                    <div id="totalcontainer">
                        <p>Sub<br>total: <span id="signo">$</span><span id="total-precio"></span></p>
                        <button id="pedir" class="">COMPRAR</button>
                        <script>
                            document.getElementById('pedir').addEventListener('click', function() {
                                this.classList.add('rebotar');

                                setTimeout(() =>{
                                    this.classList.remove('rebotar');
                                }, 500)
                            })
                        </script>
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
                    <ul class="hiden-menu" id="imprenta-navs">
                        
                    </ul>
                    <script>    
                        fetch('navs/imp-nav.html')
                            .then(response => response.text())
                            .then(data => {
                                document.getElementById('imprenta-navs').innerHTML = data;
                            })
                    </script>
                </li>
                <li class="relative-menu">
                    <a href="">Carteleria</a>
                    <ul class="hiden-menu" id="carteleria-navs">
                        
                    </ul>
                    <script>    
                        fetch('navs/crtl-nav.html')
                            .then(response => response.text())
                            .then(data => {
                                document.getElementById('carteleria-navs').innerHTML = data;
                            })
                    </script>
                </li>
                <li class="relative-menu">
                    <a href="">Cajas y Bolsas</a>
                    <ul class="hiden-menu" id="cajasbolsas-navs">
                        
                    </ul>
                    <script>    
                        fetch('navs/CaBo-nav.html')
                            .then(response => response.text())
                            .then(data => {
                                document.getElementById('cajasbolsas-navs').innerHTML = data;
                            })
                    </script>
                </li>
                <li class="relative-menu">
                    <a href="">Merchandising</a>
                    <ul class="hiden-menu" id="merch-navs">
                        
                    </ul>
                    <script>    
                        fetch('navs/merch-nav.html')
                            .then(response => response.text())
                            .then(data => {
                                document.getElementById('merch-navs').innerHTML = data;
                            })
                    </script>
                </li>
                <li class="relative-menu">
                    <a href="">Ideas</a>
                    <ul class="hiden-menu" id="ideas-navs">
                        
                    </ul>
                    <script>    
                        fetch('navs/idea-nav.html')
                            .then(response => response.text())
                            .then(data => {
                                document.getElementById('ideas-navs').innerHTML = data;
                            })
                    </script>
                </li>
                <li class="relative-menu">
                    <a href="">Deco & Gift</a>
                    <ul class="hiden-menu" id="decogift-navs">
                        
                    </ul>
                    <script>    
                        fetch('navs/DecGift-nav.html')
                            .then(response => response.text())
                            .then(data => {
                                document.getElementById('decogift-navs').innerHTML = data;
                            })
                    </script>
                </li>
                <li class="relative-menu">
                    <a href="">Cotizacion a Medida</a>
                    <ul class="hiden-menu" id="catm-navs">
                        
                    </ul>
                    <script>    
                        fetch('navs/CATM-nav.html')
                            .then(response => response.text())
                            .then(data => {
                                document.getElementById('catm-navs').innerHTML = data;
                            })
                    </script>
                </li>
            </ul>
        </nav>

    </div>
    <script src="../js/carrito/addtocart.js"></script>
    <div>
        <div class="slider">
            <div class="slides">
                <div class="slide" id="s1">
                    <div>
                        <div>
                            <img src="../img/gf-imp1.jpg" alt="">
                        </div>
                        <div>
                            <h3 class="bold spletters">Roll up</h3>
                            <div class="separador"></div>
                            <p>Es fácil de transportar y montar, ofreciendo una presentación profesional y atractiva.</p>
                            <div>
                                <button class="suggbuttom"><a href="" class="suggbletters bold">¡LO QUIERO!</a></button>
                                <!-- <a href="" class="suggbuttom">¡LO QUIERO!</a>                     -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div>
                        <div>
                            <img src="../img/gf-imp4.jpg" alt=""> 
                        </div>
                        
                        <div>
                            <h3 class="bold spletters">Volantes</h3>
                            <div class="separador"></div>
                            <p>Son económicos, fáciles de distribuir y efectivos para alcanzar a una audiencia amplia en poco tiempo.</p>
                            <div>
                                <button class="suggbuttom"><a href="" class="suggbletters bold">¡LO QUIERO!</a></button>
                                <!-- <a href="" class="suggbuttom">¡LO QUIERO!</a>                     -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div>
                        <div>
                            <img src="../img/imp1.png" alt="">
                        </div>
                        
                        <div>
                            <h3 class="bold spletters">Carnets</h3>
                            <div class="separador"></div>
                            <p>Identificaciones personalizadas con información y foto del usuario</p>
                            <div>
                                <button class="suggbuttom"><a href="" class="suggbletters bold">¡LO QUIERO!</a></button>
                                <!-- <a href="" class="suggbuttom">¡LO QUIERO!</a>                     -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div>
                        <div>
                            <img src="../img/gf-imp7.jpg" alt="">
                        </div>
                        <div>
                            <h3 class="bold spletters">Microperforado</h3>
                            <div class="separador"></div>
                            <p>ideal para publicidad en ventanas que permite la visibilidad desde un lado.</p>
                            <div>
                                <button class="suggbuttom"><a href="" class="suggbletters bold">¡LO QUIERO!</a></button>
                                <!-- <a href="" class="suggbuttom">¡LO QUIERO!</a>                     -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div>
                        <div>
                            <img src="../img/imp5.png" alt="">
                        </div>
                        <div>
                            <h3 class="bold spletters">Mugs</h3>
                            <div class="separador"></div>
                            <p>Tazas personalizadas con logos, imágenes o mensajes, perfectas para regalos corporativos y promoción de marcas.</p>
                            <div>
                                <button class="suggbuttom"><a href="" class="suggbletters bold">¡LO QUIERO!</a></button>
                                <!-- <a href="" class="suggbuttom">¡LO QUIERO!</a>                     -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div>
                        <div>
                            <img src="../img/pf-imp19.jpg" alt="">
                        </div>
                        <div>
                            <h3 class="bold spletters">Camisetas</h3>
                            <div class="separador"></div>
                            <p>Prendas de vestir personalizadas con serigrafía, bordado o impresión digital.</p>
                            <div>
                                <button class="suggbuttom"><a href="" class="suggbletters bold">¡LO QUIERO!</a></button>
                                <!-- <a href="" class="suggbuttom">¡LO QUIERO!</a>                     -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div>
                        <div>
                            <img src="../img/imp7.png" alt="">
                        </div>
                        <div>
                            <h3 class="bold spletters">Trjetas Personales</h3>
                            <div class="separador"></div>
                            <p>pequeñas tarjetas impresas con información de contacto, ideales para networking y encuentros profesionales.</p>
                            <div>
                                <button class="suggbuttom"><a href="" class="suggbletters bold">¡LO QUIERO!</a></button>
                                <!-- <a href="" class="suggbuttom">¡LO QUIERO!</a>                     -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div>
                        <div>
                            <img src="../img/pf-imp13.jpg" alt="">
                        </div>
                        <div>
                            <h3 class="bold spletters">Roll up</h3>
                            <div class="separador"></div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, repudiandae?</p>
                            <div>
                                <button class="suggbuttom"><a href="" class="suggbletters bold">¡LO QUIERO!</a></button>
                                <!-- <a href="" class="suggbuttom">¡LO QUIERO!</a>                     -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div>
                        <div>
                            <img src="../img/pf-imp13.jpg" alt="">
                        </div>
                        <div>
                            <h3 class="bold spletters">Roll up</h3>
                            <div class="separador"></div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, repudiandae?</p>
                            <div>
                                <button class="suggbuttom"><a href="" class="suggbletters bold">¡LO QUIERO!</a></button>
                                <!-- <a href="" class="suggbuttom">¡LO QUIERO!</a>                     -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div>
                        <div>
                            <img src="../img/pf-imp13.jpg" alt="">
                        </div>
                        <div>
                            <h3 class="bold spletters">Roll up</h3>
                            <div class="separador"></div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, repudiandae?</p>
                            <div>
                                <button class="suggbuttom"><a href="" class="suggbletters bold">¡LO QUIERO!</a></button>
                                <!-- <a href="" class="suggbuttom">¡LO QUIERO!</a>                     -->
                            </div>
                        </div>
                    </div>
                </div>
                
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
            slides.style.transform = `translateX(${-index * 100}%)`;
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
    </div>
    <div id="empresas">
        <div id="ventajas">
            <div class="ven">
                <div class="contadores" data-end="350" data-time="2500">
                    <p>clientes satisfechos</p>
                    <p>+<span class="contador"></span></p>
                </div>
                <div class="contadores" data-end="1000" data-time="3000">
                    <p>Proyectos Completados</p>
                    <p>+<span class="contador"></span></p>
                </div>
                <div class="contadores" data-end="260" data-time="3500">
                    <p>Proyectos Completados</p>
                    <p>+<span class="contador"></span></p>
                </div>
                <div class="contadores" data-end="400" data-time="4000">
                    <p>Proyectos Completados</p>
                    <p>+<span class="contador"></span></p>
                </div>
                <div class="contadores" data-end="530" data-time="4500">
                    <p>Proyectos Completados</p>
                    <p>+<span class="contador"></span></p>
                </div>
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        const counters = document.querySelectorAll('.contadores');

                        counters.forEach(counter => {
                            let start = 0; 
                            const end = parseInt(counter.getAttribute('data-end'));
                            const duration = parseInt(counter.getAttribute('data-time')); 
                            const incremenTime = 50; 
                            const incrementAmount = Math.ceil(end/(duration/incremenTime));
                            const counterBox = counter.querySelector('.contador');

                            function Counter(){
                                const interval = setInterval(() => {
                                    start += incrementAmount;
                                    if (start >= end) {
                                        start = end;
                                        clearInterval(interval);
                                    }
                                    counterBox.textContent = start;
                                }, incremenTime);
                            }
                            const observar = new IntersectionObserver((entries) => {
                                entries.forEach(entry => {
                                    if(entry.isIntersecting){
                                        Counter();
                                        observar.disconnect();
                                    }
                                });
                            });
                            observar.observe(document.querySelector('.contadores'));
                        });
                        
                    });
                    
                </script>
            </div>
            <div id="slogan">
                <div class="slogan-int">
                    <h2>MÁS ALLÁ <br><span class="typed"> </span></h2>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
                <script>
                    const typed = new Typed('.typed', {
                        strings: [
                            '<i class="mascota">DEL DISEÑO</i>',
                            '<i class="mascota">DEL SOCIAL MEDIA</i>',
                            '<i class="mascota">DE LA FOTOGRAFÍA</i>',
                            '<i class="mascota">DEL BRANDING</i>',
                            '<i class="mascota">DE LOS IMPRESOS</i>',
                            '<i class="mascota">DE LA WEB</i>'

                        ],

                        //stringsElement: '#cadenas-texto', // ID del elemento que contiene cadenas de texto a mostrar.
                        typeSpeed: 60, // Velocidad en mlisegundos para poner una letra,
                        startDelay: 300, // Tiempo de retraso en iniciar la animacion. Aplica tambien cuando termina y vuelve a iniciar,
                        backSpeed: 60, // Velocidad en milisegundos para borrrar una letra,
                        smartBackspace: true, // Eliminar solamente las palabras que sean nuevas en una cadena de texto.
                        shuffle: false, // Alterar el orden en el que escribe las palabras.
                        backDelay: 1100, // Tiempo de espera despues de que termina de escribir una palabra.
                        loop: true, // Repetir el array de strings
                        loopCount: false, // Cantidad de veces a repetir el array.  false = infinite
                        showCursor: true, // Mostrar cursor palpitanto
                        cursorChar: '|', // Caracter para el cursor
                        contentType: 'html', // 'html' o 'null' para texto sin formato
                    });
                </script>
            </div>
            <div id="vene2">
                <div class="ven vEn">
                    <div class="contadores" id="contador1">
                        <p class="bold">CREA</p>
                    </div>
                    <div class="contadores" id="contador2">
                        <p class="bold">INNOVA</p>
                    </div>
                    <div class="contadores" id="contador3">
                        <p class="bold">CRECE</p>
                    </div>
                    <div class="contadores" id="contador4">
                        <p class="bold">SE CREATIVO</p>
                    </div>
                    <div class="contadores" id="contador5">
                        <p class="bold">SE SÓLIDA</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="work">
        <h2 id="work_tt" class="regular">CONOCE NUESTRO <span class="light">TRABAJO</span></h2>
        <div id="separador"></div>
        <div id="gallery">
            <div class="pics p1"></div>
            <div class="pics p2"></div>
            <div class="pics p3"></div>
            <div class="pics p4"></div>
            <div class="pics p5"></div>
            <div class="pics p6"></div>
            <div class="pics p7"></div>
            <div class="pics p8"></div>
            <div class="pics p9"></div>
            <div class="pics p10"></div>
            <div class="pics p11"></div>
            <div class="pics p12"></div>
            <div class="pics p13"></div>
            <div class="pics p14"></div>
            <div class="pics p15"></div>
            <div class="pics p16"></div>
            <div class="pics p17"></div>
            <div class="pics p18"></div>
            <div class="pics p19"></div>
            <div class="pics p20"></div>
        </div>
    </div>
    <div class="atuMedida">  
        <div class="item-medida">
            <form method="post" class="form_form">
                <div class="titule">
                    <h3 class="tittles blue">ESCRÍBENOS</h3>
                </div>
                <div class="info-message" data-validate = "El nombre es requerido">
                    <input class="caja_text" type="text" name="producto" required>
                    <label class="label" for="producto">PRODUCTO</label>
                    <span></span>
                </div>
                <div class="info-message" data-validate = "El nombre es requerido">
                    <input class="caja_text" type="text" name="nombre" required>
                    <label class="label" for="nombre">NOMBRE</label>
                    <span></span>
                </div>
                <div class="info-message" data-validate="El corrreo es necesario">
                    <input class="caja_text" type="text" name="email" required>
                    <label class="label" for="email">CORREO</label>
                    <span></span>
                </div>
                <div class="info-message" data-validate="El corrreo es necesario">
                    <input class="caja_text" type="text" name="wssp" required>
                    <label class="label" for="wssp">WHATSAPP</label>
                    <span></span>
                </div>
                <div class="info-message" data-validate="Escriba el mensaje por favor">
                    <textarea name="consulta" id="" cols="30" rows="10" class="caja_text" required></textarea>
                    <label class="label" for="consulta">CONSULTA</label>
                    <span></span>
                </div>
                <div class="e-b">
                    <!--<button class="enviar" type="submit">ENVIAR MENSAJE</button>-->
                    <input type="submit" value="enviar" name="enviar" class="enviar">
                </div>
            </form>
        </div>
    </div>
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
</body>
</html>
<?php 
if (isset($_POST["enviar"])) {
    $producto = $_POST["producto"];
    $nombre = $_POST["nombre"];
    $email = $_POST["email"]; 
    $wssp = $_POST["wssp"];
    $consulta = $_POST["consulta"];

    $destinatario = "programacion@solidasas.com";

    $contenido = "Mensaje de la pagina web de: $nombre, \n Contacto de Whatsapp: $wssp \n";
    $contenido .= "Email: $email \n";
    $contenido .= "producto: $producto \n";
    $contenido .= "consulta: $consulta";
    $asunto = "cotizacion a medida del sitio web";
    $header = "From: $email"; 

    $mail = mail($destinatario, $asunto, $contenido, $header);

    if ($mail) {
        echo "<script>alert('El correo se envio correctamente :)')</script>";
    } else {
        echo "<script>alert('El correo no se pudo enviar, intente nuevamente :(')</script>";
    }
}
?>