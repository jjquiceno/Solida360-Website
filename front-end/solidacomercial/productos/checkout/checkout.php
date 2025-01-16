<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/solidacomercial/home.css">
    <link rel="stylesheet" href="../../../css/solidacomercial/products.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../../../css/scroll.css">
    <link rel="stylesheet" href="animacion.css">
    <title>Document</title>
    <style>
        .revisiones{
            /* border: solid black; */
            height: fit-content;
        }
        .semiradio-izquierda{
            /* border: solid black; */
            width: fit-content;
            border-radius: 0 25px 25px 0;
            padding: 0 30px;
            background-color: #b8c66c;
            margin: 10px 0;
        }
        .tittles, .light{
            color: var(--negro);
        }
        .separador{
            border: 1px solid var(--negro);
        }
        .objects{
            width: 95%;
            margin-left: 5%;
            border-left: 2px solid var(--negro);
            /* border-bottom: 2px solid var(--negro); */
            min-height: 200px;
            height: fit-content;
        }
        #invert-position{
            /* border: solid black; */
            width: 100%;
            height: fit-content;
            display: flex;
            justify-content: right;
        }
        .semiradio-derecho{
            border-radius: 25px 0 0 25px;
            width: fit-content;
            padding: 0 30px;
            background-color: #b8c66c;
            margin-bottom: 10px;
        }
        .left{
            display: flex;
            flex-direction: column;
            align-items: end;
        }
        .totales{
            height: 200px;
            width: 95%;
            margin-right: 5%;
            border-right: 2px solid var(--negro);
            /* border-bottom: 2px solid var(--negro); */
            /* text-align: right; */
            display: flex;
            flex-direction: column;
            align-items: end;
        }
        #separador{
            width: 100%;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }
        #separador > :nth-child(2), #separador > :nth-child(3), #separador > :nth-child(5), #separador > :nth-child(6){
            border: 2px solid var(--verde);
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }
        #separador > :nth-child(4){
            border: 2px solid var(--verde);
            width: 25%;
            height: 10px;
            border-radius: 15px;
        }
        .separadorV{
            border: 1px solid var(--verde);
            width: 25%;
        }
        #datos-entrega{
            border: solid black;
        }
        .separador-tenue{
            border: 1px solid var(--negro);
            opacity: .5;
            width: 60%;
            border-radius: 10px;
        }
        #continue{
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            margin-bottom: 10px;
            background-image: url('../../../img/envios2.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-blend-mode: multiply;
            background-color: var(--negro);
            background-position: center center;
            border-radius: 30px;
        }
        .info-continue{
            width: 45%;
            height: 90%;
            border-radius: 40px 20px 20px 20px;
            backdrop-filter: blur(20px) grayscale(30%);
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        
        .h2{
            font-size: 7rem;
            color: #b8c66c;
            font-family: graphie-bold;
        }
        .h2 > span{
            color: #b8c66c;
        }
        .h3{
            font-size: 3rem;
            color: var(--azul);
            font-family: graphie-light;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="header-grid">
            <div class="logo-box">
                <a href="../../homecomer.php">
                    <img class="logo" src="../../../img/iconos/ICONO CON PUNTOS.png" alt="">
                </a>
            </div>
            <div class="containerGrid">
                <div style="position: relative;">
                    <input type="text" id="search-input" class="busqueda tittles" name="search" placeholder="buscar productos" onkeyup="searchFunction()">
                </div>
                <!-- <div class="conttt">
                    <img class="carrito" src="../../../img/iconos/carrito.png" alt="">
                </div> -->
                <!-- <div class="wish-list">
                    <div class="exs">
                        <p>Productos (<span id="contador"></span>)</p>
                        <i id="cerrar" class="fa-solid fa-xmark fa-2x"></i>
                    </div>
                    <div id="shoping">
                    
                    </div>
                    <div id="totalcontainer">
                        <p>Sub<br>total: <span id="signo">$</span><span id="total-precio"></span></p>
                        <button id="pedir" class="">CHECKOUT</button>
                        <script>
                            document.getElementById('pedir').addEventListener('click', function() {
                                this.classList.add('rebotar');

                                setTimeout(() =>{
                                    this.classList.remove('rebotar');
                                    window.location.href = "checkout/checkout.php";
                                }, 500)
                            })
                        </script>
                    </div>
                </div> -->
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
                        fetch('../../navs/imp-nav.html')
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
                        fetch('../../navs/crtl-nav.html')
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
                        fetch('../../navs/CaBo-nav.html')
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
                        fetch('../../navs/merch-nav.html')
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
                        fetch('../../navs/idea-nav.html')
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
                        fetch('../../navs/DecGift-nav.html')
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
                        fetch('../../navs/CATM-nav.html')
                            .then(response => response.text())
                            .then(data => {
                                document.getElementById('catm-navs').innerHTML = data;
                            })
                    </script>
                </li>
            </ul>
        </nav>
        <div id="search-results">

        </div>
        <script>
            document.getElementById('search-input').addEventListener('click', function() {
                const box = document.getElementById('search-results');
                if(this.checked){
                    box.style.display = 'none';
                }else{
                    box.style.display = 'flex';
                }
            })
        </script>
        <script src="../../../js/carrito/search.js"></script>
        
    </div>
    <div class="revisiones">
        <div class="semiradio-izquierda">
            <h2 class="tittles">REVISA TU <span class="light">CARRITO</span></h2>
        </div>
        <div class="separador"></div>
        <div class="objects" id="objects">

        </div>
    </div>
    <!-- inicio separador central -->
    <div id="separador">
        <div class="separadorV"></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div class="separadorV"></div>
    </div>
    <!-- fin separador central -->
    <div class="revisiones left">
        <div id="invert-position">
            <div class="semiradio-derecho">
                <h2 class="tittles">TOTALES DEL <span class="light">CARRITO</span></h2>
            </div>
        </div>
        <div class="separador"></div>
        <div class="totales">
            <div style="text-align: right;">
                <h2>Sub total: </h2>
                <span id="signo">$</span><span id="total-precio"></span>
            </div>
            <div class="separador-tenue"></div>
            <h2>Datos de entrega:</h2>
            <p></p>
        </div>
        
    </div>
    <script src="../../../js/carrito/costos.js"></script>
    <script src="../../../js/carrito/checkout.js"></script>
    <br>
    <div id="continue">
        <div class="info-continue">
            <h2 class="h2">Todo <span class="light">listo?</span></h2>
            <h3 class="h3">Completa tus datos de envio, para empezar con la creatividad</h3>
        </div>
        <div class="info-continue" style="align-items: center;">
            <button id="continueB">ir a llenar los datos de <span class="light">entrega</span></button>
            <script>
                document.getElementById('continueB').addEventListener('click', () => {
                    window.location.href = "envio.php";
                })
            </script>
        </div> 
        
    </div>
    <section id="bg">
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
                    <div class="slide">
                        <div>
                            <img src="../../../img/pf-imp13.jpg" alt="">
                            <div>
                                <h3 class="bold">Roll up</h3>
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
                            <img src="../../../img/pf-imp13.jpg" alt="">
                            <div>
                                <h3 class="bold">Volantes</h3>
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
                            <img src="../../../img/pf-imp13.jpg" alt="">
                            <div>
                                <h3 class="bold">Carnets</h3>
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
                            <img src="../../../img/pf-imp13.jpg" alt="">
                            <div>
                                <h3 class="bold">Microperforado</h3>
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
                            <img src="../../../img/pf-imp13.jpg" alt="">
                            <div>
                                <h3 class="bold">Mugs</h3>
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
                            <img src="../../../img/pf-imp13.jpg" alt="">
                            <div>
                                <h3 class="bold">Camisetas</h3>
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
                            <img src="../../../img/pf-imp13.jpg" alt="">
                            <div>
                                <h3 class="bold">Trjetas Personales</h3>
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
                            <img src="../../../img/pf-imp13.jpg" alt="">
                            <div>
                                <h3 class="bold">Roll up</h3>
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
                            <img src="../../../img/pf-imp13.jpg" alt="">
                            <div>
                                <h3 class="bold">Roll up</h3>
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
                            <img src="../../../img/pf-imp13.jpg" alt="">
                            <div>
                                <h3 class="bold">Roll up</h3>
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
            <script src="../../../js/carrito/slidercart.js"></script>
        </section>
    </section>
    <section class="footter">
        <div class="foot-interior">
            <div class="fot-info" id="info1">
                <div>
                    <img src="../../../img/iconos/ipbe.png" alt="" class="logo-solida-fot">
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
    <!-- <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script> -->
    <script>
    	// AOS.init()
        // document.addEventListener('contextmenu', event => event.preventDefault());
	</script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
</body>
</html>
