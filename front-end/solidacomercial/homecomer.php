<?php 
    session_start();
    include("../../back-end/conexion.php");
    $status = $_SESSION['status'] = 1;
    if(isset($_SESSION['email'])){
        $email = $_SESSION['email'];
    }else{
        $email = "";
    }
    $fila = "SELECT `name` FROM `users` WHERE email = '$email' ";
    $plan = "SELECT `plan` FROM `users` WHERE email = '$email' ";
    $resultado =  mysqli_query($conexion, $fila);
    $resultplan = mysqli_query($conexion, $plan);

    if (mysqli_num_rows($resultado) > 0) {
        while($row = mysqli_fetch_assoc($resultado)) {
            $_SESSION['name'] = $row['name'];
            if (mysqli_num_rows($resultplan) > 0) {
                while($row = mysqli_fetch_assoc($resultplan)){
                    $_SESSION['plan'] = $row['plan'];
                }
            }
        }
    }else{
        echo "No hay resultados";
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/iconos/logo-solida.png">
    <link rel="stylesheet" href="../css/solidacomercial/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/solidacomercial/hcomer.css">
    <link rel="stylesheet" href="../css/scroll.css">
    <title>Sólida</title>
</head>
<body>
    <div id="containerAlert">
        <div id="alert" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="2000">
            <div id="flex-x">
                <i id="cerrar-alert" class="fa-solid fa-xmark fa-2x" style="cursor: pointer;"></i>
            </div>
            <div id="alert-flex">
                <div>
                    <h2 class="tittles" id="titlelittle">Queremos Saber quien eres</h2>
                    <p class="regular" id="none">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad porro alias sed, veritatis ullam nobis iusto velit officia suscipit provident iure perferendis aspernatur sapiente eveniet inventore asperiores similique ut corporis.</p>
                </div>
                <div class="container_form">
                    <form name="form" action="../../back-end/log-in.php" method="post" class="form_f">
                        <div class="titule">
                            <h3 class="tittles">INICIA SESION</h3>
                        </div>
                        <input type="hidden" name="csrf_token" value="<>">
                        <div class="info-message" data-validate="el correo es requerido">
                            <input class="caja_text" type="email" name="email" required>
                            <label class="label" for="email">CORREO</label>
                            <span></span>
                        </div>
                        <div class="info-message" data-validate="el correo es requerido">
                            <input class="caja_text" type="password" name="password" required>
                            <label class="label" for="password">CONTRASEÑA</label>
                            <span></span>
                        </div>
                        <div style="display: none;">
                            <!-- <p id="ubicacion">home</p> -->
                            <p id="path" style="display: none;"></p>
                            <script>
                                const pathName = window.location.pathname;
                                document.getElementById('path').innerHTML = pathName;
                            </script>
                            <input type="hidden" name="ubicacionValue" id="ubicacionValue">
                        </div>
                        <div class="enlaces">
                            <a href="../recuperacion/email.html">Olvide mi contraseña</a>
                            <br>
                            <a href="">No estoy egistrado</a>
                        </div>
                        <div class="e-b">
                            <input id="Log" for="form" type="submit" value="enviar" name="log" onclick="document.getElementById('ubicacionValue').value = document.getElementById('path').innerText" class="enviar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="header-grid">
            <div class="containerGrid">
                <div class="logo-box" style="padding-left: 15px; display: flex; align-items: center;">
                    <div id="menuSesion" data-aos="fade-right" data-aos-duration="800">
                        <i class="fa-solid fa-bars fa-2x"></i>
                    </div>
                    <div id="menuSesionFloat">
                        <div style="width: 90%; height: 90%;">
                            <div>
                                <div class="iconos-box">
                                    <i id="closeMenuSesion" class="fa-solid fa-xmark fa-2x" style="cursor: pointer;"></i>
                                    <img class="logo" src="../img/iconos/ICONO CON PUNTOS.png" alt="">
                                </div>
                            </div>
                            <br>
                            <div id="user">
                                <h2 class="bold" style="font-size: 1.2rem;">
                                    Bienvenido 
                                    <span id="nameSesion" class="light">
                                        <?php 
                                            echo $_SESSION['name'];
                                        ?>
                                    </span> 
                                </h2>
                                <h2 id="usercontent" class="bold" style="font-size: 1.2rem;">Aun no se ha iniciado sesion</h2>
                            </div>
                            <div class="separador-sesion"></div>
                            <br>
                            <div class="campos contactOptions">
                                <h2 id="contactTittle" class="light-w" style="font-size: 1.2rem; cursor: default;">¿Necesiats ayuda? ¡CONTACTANOS!</h2>
                                <div id="contactList">
                                    <ul style="list-style: none;">
                                        <li class="regular"><a href="" class="black" style="text-decoration: none; font-size: 1rem;">Whatsapp</a></li>
                                        <li class="regular"><a href="" class="black" style="text-decoration: none; font-size: 1rem;">correo</a></li>
                                        <li class="regular"><a href="" class="black" style="text-decoration: none; font-size: 1rem;">instagram</a></li>
                                        <li class="regular"><a href="" class="black" style="text-decoration: none; font-size: 1rem;">linkedin</a></li>
                                    </ul>
                                </div>
                                <script>
                                    const tittle = document.getElementById('contactTittle');
                                    const contactList = document.getElementById('contactList');
                                    contactList.style.display = 'none';
                                    tittle.addEventListener("mouseover", () => {
                                        contactList.style.display = 'block';
                                        contactList.classList.toggle("active");
                                        contactList.addEventListener("mouseover", () => {
                                            contactList.style.display = 'block';
                                        });
                                    });
                                    tittle.addEventListener("mouseout", () => {
                                        contactList.classList.remove("active");
                                        contactList.style.display = 'none';
                                        contactList.addEventListener("mouseout", () => {
                                            contactList.style.display = 'none';
                                        })
                                    });
                                </script>
                            </div>
                            <div class="campos" id="logoutbutton">
                                <form name="closeform" style="height: fit-content;" action="../../back-end/log-out.php" method="post">
                                    
                                    <div style="display: none;">
                                        <p id="pathclose" style="display: none;"></p>
                                        <script>
                                            const pathNameClose = window.location.pathname;
                                            document.getElementById('pathclose').innerHTML = pathName;
                                        </script>
                                        <input type="hidden" name="ubicacionValueclose" id="ubicacionValueClose">
                                    </div>
                                    <button id="closeSesion" for="closeform" style="cursor: pointer; color: black; border: none; background: none;" type="submit" onclick="document.getElementById('ubicacionValueClose').value = document.getElementById('pathclose').innerText"><h2 class="light-w" style="font-size: 1.2rem;">Cerrar Sesion</h2></button>
                                    
                                </form>
                            </div>
                            <div  id="loginB">
                                <h2 id="loginButton" class="campos light-w" style="font-size: 1.2rem; cursor: pointer;">login</h2>
                            </div>
                            <div id="configButton">
                                <h2 id="cob" class="campos light-w" style="font-size: 1.2rem; cursor: pointer;">Ajustes de tu perfil</h2>
                            </div>
                            <div id="homeComer" class="campos">
                                <h2 class="light-w" style="font-size: 1.2rem; cursor: pointer;">Volver al comercio</h2>
                            </div>
                            <div id="allProducts" class="campos">
                                <h2 id="vbackh" class="light-w" style="font-size: 1.2rem; cursor: pointer;"><a id="enlaceP" href="productos/allproducts.php">Ver todos los productos</a></h2>
                                <script>
                                    document.getElementById('vbackh').addEventListener("click", () => {
                                        window.location.href = 'homecomer.php';
                                    })
                                </script>
                            </div>
                            <div class="campos">
                                <h2 class="light-w"><a href="../../index.html" style="text-decoration: none; color: black; font-size: 1.2rem;">Salir del comercio y volver al inicio</a></h2>
                            </div>
                            <script src="../js/loginadvice.js"></script>
                        </div>
                    </div>
                    <script>
                        const toggle = document.getElementById('menuSesion');
                        const toggleMenu = document.getElementById('menuSesionFloat');
                        const close = document.getElementById('closeMenuSesion');
                        toggle.addEventListener("click", () => {
                            toggleMenu.classList.toggle("active");
                        });
                        close.addEventListener("click", () => {
                            toggleMenu.classList.remove("active");
                        });
                    </script>
                </div>
                <div style="position: relative;" id="busqueda-box" data-aos="fade-down" data-aos-duration="800">
                    <input type="text" id="search-input" class="busqueda regular" name="search" placeholder="Buscar productos" onkeyup="searchFunction()">
                </div>
                <div class="conttt" data-aos="fade-left" data-aos-duration="800">
                    <i class="fa-solid fa-cart-shopping fa-2x"></i>
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
                        <button id="pedir" class="">CHECKOUT</button>
                        <script>
                            document.getElementById('pedir').addEventListener('click', function() {
                                this.classList.add('rebotar');

                                setTimeout(() =>{
                                    this.classList.remove('rebotar');
                                    window.location.href = "productos/checkout/checkout.php";
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
        <div class="responsive-menu">
            <nav class="nav2" >
                <ul class="listas" >
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
            });
        </script>
        <script src="../js/carrito/search.js"></script>
    </div>
    <script src="../js/carrito/addtocart.js"></script>
    
    <div data-aos="fade-up" data-aos-duration="800">
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
                            <h3 class="bold spletters litlle" id="little">Microperforado</h3>
                            <div class="separador"></div>
                            <p>ideal para publicidad en ventanas que permite la visibilidad desde un lado.</p>
                            <div>
                                <button class="suggbuttom"><a href="" class="suggbletters bold">¡LO QUIERO!</a></button>
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
                            <h3 class="bold spletters" id="little">Trjetas Personales</h3>
                            <div class="separador"></div>
                            <p>pequeñas tarjetas impresas con información de contacto, ideales para networking y encuentros profesionales.</p>
                            <div>
                                <button class="suggbuttom"><a href="" class="suggbletters bold">¡LO QUIERO!</a></button>
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
                <div class="contadores" data-end="350" data-time="2500" data-aos="fade-right" data-aos-duration="800" data-aos-delay="0">
                    <p>clientes satisfechos</p>
                    <p>+<span class="contador"></span></p>
                </div>
                <div class="contadores" data-end="1000" data-time="3000" data-aos="fade-right" data-aos-duration="800" data-aos-delay="100">
                    <p>Proyectos Completados</p>
                    <p>+<span class="contador"></span></p>
                </div>
                <div class="contadores" data-end="260" data-time="3500" data-aos="fade-right" data-aos-duration="800" data-aos-delay="200">
                    <p>Proyectos Completados</p>
                    <p>+<span class="contador"></span></p>
                </div>
                <div class="contadores" data-end="400" data-time="4000" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                    <p>Proyectos Completados</p>
                    <p>+<span class="contador"></span></p>
                </div>
                <div class="contadores" data-end="530" data-time="4500" data-aos="fade-right" data-aos-duration="800" data-aos-delay="400">
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
                <div class="slogan-int" data-aos="zoom-in" data-aos-duration="800">
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

                        typeSpeed: 60, 
                        startDelay: 300, 
                        backSpeed: 60,
                        smartBackspace: true, 
                        shuffle: false, 
                        backDelay: 1100, 
                        loop: true, 
                        loopCount: false, 
                        showCursor: true,
                        cursorChar: '|', 
                        contentType: 'html', 
                    });
                </script>
            </div>
            <div id="vene2">
                <div class="ven vEn">
                    <div class="contadores-b" id="contador1" data-aos="fade-left" data-aos-duration="800" data-aos-delay="0">
                        <p class="bold">CREA</p>
                    </div>
                    <div class="contadores-b" id="contador2" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100">
                        <p class="bold">INNOVA</p>
                    </div>
                    <div class="contadores-b" id="contador3" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                        <p class="bold">CRECE</p>
                    </div>
                    <div class="contadores-b" id="contador4" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">
                        <p class="bold">SE CREATIVO</p>
                    </div>
                    <div class="contadores-b" id="contador5" data-aos="fade-left" data-aos-duration="800" data-aos-delay="400">
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
            <div class="pics p1" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="0"></div>
            <div class="pics p2" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="50"></div>
            <div class="pics p3" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="100"></div>
            <div class="pics p4" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="150"></div>
            <div class="pics p5" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="200"></div>
            <div class="pics p6" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="250"></div>
            <div class="pics p7" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="300"></div>
            <div class="pics p8" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="350"></div>
            <div class="pics p9" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="400"></div>
            <div class="pics p10" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="450"></div>
            <div class="pics p11" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="500"></div>
            <div class="pics p12" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="550"></div>
            <div class="pics p13" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="600"></div>
            <div class="pics p14" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="650"></div>
            <div class="pics p15" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="100"></div>
            <div class="pics p16" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="150"></div>
            <div class="pics p17" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="200"></div>
            <div class="pics p18" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="250"></div>
            <div class="pics p19" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="300"></div>
            <div class="pics p20" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="350"></div>
        </div>
    </div>
    <div class="atuMedida">  
        <div class="item-medida">
            <form method="post" class="form_form" data-aos="fade-down" data-aos-duration="800" data-aos-delay="0">
                <div class="titule">
                    <h3 class="blue formtitle">ESCRÍBENOS</h3>
                </div>
                <div class="info-message" data-validate = "El nombre es requerido" data-aos="fade-left" data-aos-duration="800" data-aos-delay="0">
                    <input class="caja_text" type="text" name="producto" required>
                    <label class="label" for="producto">PRODUCTO</label>
                    <span></span>
                </div>
                <div class="info-message" data-validate = "El nombre es requerido" data-aos="fade-left" data-aos-duration="800" data-aos-delay="50">
                    <input class="caja_text" type="text" name="nombre" required>
                    <label class="label" for="nombre">NOMBRE</label>
                    <span></span>
                </div>
                <div class="info-message" data-validate="El corrreo es necesario" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100">
                    <input class="caja_text" type="text" name="email" required>
                    <label class="label" for="email">CORREO</label>
                    <span></span>
                </div>
                <div class="info-message" data-validate="El corrreo es necesario" data-aos="fade-left" data-aos-duration="800" data-aos-delay="150">
                    <input class="caja_text" type="text" name="wssp" required>
                    <label class="label" for="wssp">WHATSAPP</label>
                    <span></span>
                </div>
                <div class="info-message" data-validate="Escriba el mensaje por favor" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                    <textarea name="consulta" id="" cols="30" rows="10" class="caja_text" required></textarea>
                    <label class="label" for="consulta">CONSULTA</label>
                    <span></span>
                </div>
                <div class="e-b" data-aos="fade-up" data-aos-duration="800" data-aos-delay="0">
                    <!--<button class="enviar" type="submit">ENVIAR MENSAJE</button>-->
                    <input type="submit" value="enviar" name="enviar" class="enviar">
                </div>
            </form>
        </div>
    </div>
    <div class="go-top-container show">
        <div class="go-top-button">
            <div><img class="i" src="../img/iconos/wats.png" alt=""></div>
        </div>
        <div class="go-top-button">
            <div><img class="i" src="../img/iconos/in.png" alt=""></div>
        </div>
        <div class="go-top-button">
            <div><img class="i" src="../img/instagram.png" alt=""></div>
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
                                <img src="../img/iconos/ubi.png" alt="" class="footer-iconos">
                            </div>
                            <div>
                                <a href="https://maps.app.goo.gl/NkUMMBjKmGbwSTrk6" target="_blank"><p>Cra. 41A #27 A sur 86 - Centro Ejecutivo La Casona Envigado - Oficina 102</p></a>
                            </div>
                        </div>
                        <div class="fot-flex">
                            <div>
                                <img src="../img/iconos/mail.png" alt="" class="footer-iconos">
                            </div>
                            <div>
                                <p>gestion@solidasas.com</p>
                            </div>
                        </div>
                        <div class="fot-flex">
                            <div>
                                <img src="../img/iconos/wats.png" alt="" class="footer-iconos">
                            </div>
                            <div>
                                <p>+57 324 569 36 94</p>
                            </div>
                        </div>
                        <div class="fot-flex">
                            <div>
                                <img src="../img/iconos/time.png" alt="" class="footer-iconos">
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
                            <img src="../img/iconos/in.png" alt="" class="footer-iconos">
                        </div>
                        <div>
                            <a href="https://co.linkedin.com/company/s%C3%B3lida-sas" target="_blank"><p>Linkedin</p></a><br>
                        </div>
                    </div>
                    <div class="fot-flex">
                        <div>
                            <img src="../img/iconos/igblanco.png" alt="" class="footer-iconos">
                        </div>
                        <div>
                            <a href="https://www.instagram.com/solida360_?igsh=MWFlZW9iaTJ0N3NuMQ%3D%3D" target="_blank"><p>Instagram</p></a>
                        </div>
                    </div>
                    <div class="fot-flex">
                        <div>
                            <img src="../img/iconos/ttblanco.png" alt="" class="footer-iconos">
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
    <script>AOS.init();</script>
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