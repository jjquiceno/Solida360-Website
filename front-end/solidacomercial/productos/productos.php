<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/solidacomercial/home.css">
    <link rel="stylesheet" href="../../css/solidacomercial/products.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../../css/scroll.css">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
    <!-- <div id="header-container"></div>
    <script>    
        fetch('header.html')//aqui va la direccion del header que estamos cargando
            .then(response => response.text())
            .then(data => {
                document.getElementById('header-container').innerHTML = data;
                // funcionalidad de mostrar y ocultar
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
            })
    </script> -->
    <div class="header">
        <div class="header-grid">
            <div class="logo-box">
                <a href="../../../index.html">
                    <img class="logo" src="../../img/iconos/ICONO CON PUNTOS.png" alt="">
                </a>
            </div>
            <div class="containerGrid">
                <div style="position: relative;">
                    <input type="text" class="busqueda tittles" name="search" placeholder="buscar productos">
                </div>
                <div class="conttt">
                    <img class="carrito" src="../../img/iconos/carrito.png" alt="">
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
                        fetch('../navs/imp-nav.html')
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
                        fetch('../navs/crtl-nav.html')
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
                        fetch('../navs/CaBo-nav.html')
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
                        fetch('../navs/merch-nav.html')
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
                        fetch('../navs/idea-nav.html')
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
                        fetch('../navs/DecGift-nav.html')
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
                        fetch('../navs/CATM-nav.html')
                            .then(response => response.text())
                            .then(data => {
                                document.getElementById('catm-navs').innerHTML = data;
                            })
                    </script>
                </li>
            </ul>
        </nav>
    </div>
    <section class="productDetail">
        <div class="volver">
            <a>
                <div>
                    <i id="go-back" class="fa-solid fa-arrow-left fa-2x" style="color: #b8c66c;"></i>
                    <script>
                        document.getElementById('go-back').addEventListener('click', function(){
                            window.history.back();
                        })
                    </script>
                </div>
            </a>
        </div>
        <div class="productImg">
            <img src="../../img/gf-imp3.jpg" alt="">
        </div>
        <div class="costos">
            <div>
                <h1 class="tittles">Remitos</h1>
                <p id="valorproducto">10000</p>
            </div>
            <form method="post">
                <div class="perso">
                    <div>
                        <h4 class="light">Tamaño del remito</h4>
                        <select class="select tamañoRemito" name="tamañoRemito" id="" required>
                            <!-- <option value=""></option> -->
                            <option value="Pequeño">Pequeño</option>
                            <option value="Mediano">Mediano</option>
                            <option value="Grande">Grande</option>
                        </select>
                    </div>
                    <div>
                        <h4 class="light">Tipo del Remito</h4>
                        <select class="select tipoRemito" name="tipoRemito" id="" required>
                            <!-- <option value=""></option> -->
                            <option value="remito-x">Remito X</option>
                            <option value="remito-l">Remito L</option>
                        </select>
                    </div>
                    <div>
                        <h4 class="light">Tipo de copias</h4>
                        <select class="select tipoCopias" name="tipoCopias" id="" required>
                            <!-- <option value=""></option> -->
                            <option value="duplicado">Duplicado</option>
                            <option value="triplicado">Triplicado</option>
                        </select>
                    </div>
                    <div>
                        <h4 class="light">Encuadernado</h4>
                        <select class="select tipoEncuadernado" name="tipoEncuadernado" id="" required>
                            <!-- <option value=""></option> -->
                            <option value="emblocado">Emblocado</option>
                            <option value="sueltas">Hojas Sueltas</option>
                        </select>
                    </div>
                    <div>
                        <h4 class="light">Impresión</h4>
                        <select class="select" name="" id="" required>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                    <div>
                        <h4 class="light">papel Interior</h4>
                        <select class="select" name="" id="" required>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                    <div>
                        <h4 class="light">¿Tienes tu diseño listo?</h4>

                        <div id="checkboxes">
                            <input class="cbs" type="checkbox" name="si" onchange="toggleCb(this)">
                            <input class="cbs" type="checkbox" name="no" onchange="toggleCb(this)">
                        </div>
                        <p>seleccionado: <span id="selec"></span></p>

                        <div class="drops" id="dropSi">
                            <h5 class="regular">Porfavor adjunta tu arte y nosotros nos encargaremos del resto</h5>
                            <input id="addfile" type="file" accept="image/*">
                        </div>
                        <div class="drops" id="dropNo">
                            <h5 class="regular">No te preocupes, nosotros te ayudamos con tu arte, contactae con nosotros y te ayudaremos</h5>
                        </div>
                        <script>
                            function toggleCb(checkbox){
                                const dropSi = document.getElementById('dropSi');
                                const dropNo = document.getElementById('dropNo');
                                const selected = document.getElementById('selec');
                                
                                const checkboxes = document.querySelectorAll('input[type="checkbox"]');
                                checkboxes.forEach((cb) => {
                                    if(cb !== checkbox) {
                                        cb.checked = false;
                                    }
                                });

                                dropSi.style.display = 'none';
                                dropNo.style.display = 'none';

                                if (checkbox.checked) {
                                    if(checkbox.name == "si"){
                                        dropSi.style.display = 'block';
                                        selected.textContent = "si";
                                    }else if(checkbox.name == "no"){
                                        dropNo.style.display = 'block';
                                        selected.textContent = "no";
                                    }
                                }
                            }
                        </script>
                    </div>
                    <div>
                        <h4 class="light">cantidad</h4>
                        <div class="containercant">
                            <input type="button" value="-" class="minuscant buttons">
                            <input type="number" id="cajacantidad" class="cant" step="1" min="1" max="" value="1" placeholder="" inputmode="numeric">
                            <input type="button" value="+" class="pluscant buttons">
                        </div>
                    </div>
                </div>
            </form>
            <br><br>
            <div>
                <h1>Valor unitario: </h1>
                <p id="costouni">8900</p>
                <br>
                <hr>
                <br>
                <h2>Total: </h2>
                <div id="totaladd">
                    <p id="totalValue">8900</p>
                    <button id="addtocartbutton" onclick="agregarAlCarrito('Remito', document.querySelector('.tamañoRemito').value, document.querySelector('.tipoRemito').value, document.querySelector('.tipoCopias').value, document.querySelector('.tipoEncuadernado').value, document.getElementById('selec').textContent,document.getElementById('cajacantidad').value)">¡AGREGAR!</button>
                    <script>
                        document.getElementById('addtocartbutton').addEventListener('click', function() {
                            this.classList.add('rebotar');
    
                            setTimeout(() => {
                                this.classList.remove('rebotar');
                            }, 500)
                        })
                    </script>
                </div>
                <br>
                <hr>
            </div>
            <script src="../../js/carrito/costos.js"></script>
            <script src="../../js/carrito/addtocart.js"></script>
        </div>
    </section>
    <section id="bg">
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
                            <img src="../../img/pf-imp13.jpg" alt="">
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
                            <img src="../../img/pf-imp13.jpg" alt="">
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
                            <img src="../../img/pf-imp13.jpg" alt="">
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
                            <img src="../../img/pf-imp13.jpg" alt="">
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
                            <img src="../../img/pf-imp13.jpg" alt="">
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
                            <img src="../../img/pf-imp13.jpg" alt="">
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
                            <img src="../../img/pf-imp13.jpg" alt="">
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
                            <img src="../../img/pf-imp13.jpg" alt="">
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
                            <img src="../../img/pf-imp13.jpg" alt="">
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
                            <img src="../../img/pf-imp13.jpg" alt="">
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
            <script src="../../js/carrito/slidercart.js"></script>
        </section>
    </section>
    
    <section class="footter">
        <div class="foot-interior">
            <div class="fot-info" id="info1">
                <div>
                    <img src="../../img/iconos/ipbe.png" alt="" class="logo-solida-fot">
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

        // document.addEventListener('contextmenu', event => event.preventDefault());
	</script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
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