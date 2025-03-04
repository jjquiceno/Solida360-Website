<?php 
    session_start();
    // $_SESSION['loggedin'] = true;
    include("../../../back-end/conexion.php");
    // include("../../back-end/log-in.php");
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
        // Si hay resultados, mostrarlos
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
    <link rel="stylesheet" href="../../css/solidacomercial/home.css">
    <link rel="stylesheet" href="../../css/solidacomercial/products.css">
    <link rel="stylesheet" href="../../css/solidacomercial/allp.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../../css/scroll.css">
    <title>Document</title>
    <style>
        .circles {
            position: fixed; 
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1; 
        }
        .circle {
            position: absolute;
            border-radius: 50%;
            filter: blur(5px);
            background-color: rgba(255, 255, 255, 0.1);
            transition: background-color 2s linear;
        }
    </style>
</head>
<body>
    <div class="circles" id="circles"></div>
    <script src="../../js/circles.js"></script>
    <div id="containerAlert">
        <div id="alert" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="2000">
            <div id="flex-x">
                <i id="cerrar-alert" class="fa-solid fa-xmark fa-2x" style="cursor: pointer;"></i>
            </div>
            <div id="alert-flex">
                <div>
                    <h2 class="tittles" id="titlelittle">Queremos Saber quien eres</h2>
                    <p class="" id="none">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad porro alias sed, veritatis ullam nobis iusto velit officia suscipit provident iure perferendis aspernatur sapiente eveniet inventore asperiores similique ut corporis.</p>
                </div>
                <div class="form">
                    <form name="form" action="../../../back-end/log-in.php" method="post" class="form_f">
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
                            <a href="">No estoy registrado</a>
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
                                    <img class="logo" src="../../img/iconos/ICONO CON PUNTOS.png" alt="">
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
                                            // contactList.classList.toggle("disappear");
                                            // setTimeout(() => {
                                            //     contactList.classList.remove("disappear");
                                            // },500)
                                        })
                                    });
                                </script>
                            </div>
                            <div class="campos" id="logoutbutton">
                                <form name="closeform" style="height: fit-content;" action="../../../back-end/log-out.php" method="post">
                                    
                                    <div style="display: none;">
                                        <!-- <p id="ubicacion">home</p> -->
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
                            <div id="loginB">
                                <h2 id="loginButton" class="campos light-w" style="font-size: 1.2rem; cursor: pointer;">login</h2>
                            </div>
                            <div id="configButton">
                                <h2 id="cob" class="campos light-w" style="font-size: 1.2rem; cursor: pointer;">Ajustes de tu perfil</h2>
                            </div>
                            <div id="homeComer" class="campos">
                                <h2 id="vbackh" class="light-w" style="font-size: 1.2rem; cursor: pointer;">Volver al comercio</h2>
                                <script>
                                    document.getElementById('vbackh').addEventListener("click", () => {
                                        window.location.href = '../homecomer.php';
                                    })
                                </script>
                            </div>
                            <div id="allProducts" class="campos">
                                <h2 class="light-w" style="font-size: 1.2rem; cursor: pointer;"><a id="enlaceP" href="allproducts.php">Ver todos los productos</a></h2>
                            </div>
                            <div class="campos">
                                <h2 class="light-w"><a href="../../../index.html" style="text-decoration: none; color: black; font-size: 1.2rem;">Salir del comercio y volver al inicio</a></h2>
                            </div>
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
                                    window.location.href = "checkout/checkout.php";
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
        <script src="../../js/carrito/search.js"></script>
    </div>
    <div id="container-message">

    </div>
    
    <div class="texts" data-aos="zoom-in" data-aos-duration="600">
        <div class="backg">
            <div class="blur">
                <div class="typeContainer">
                    <h1 id="text1T" class="light">¡LLEVA TU EMPRESA <br> A OTRO NIVEL!</h1>
                    <h1 id="text2T"><span class="typed bold green"></span></h1>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
    <script>
        const typed = new Typed('.typed', {
            strings: [
                '<i class="mascota">MUGS</i>',
                '<i class="mascota">RULL UPS</i>',
                '<i class="mascota">REMITOS</i>',
                '<i class="mascota">TARJETAS PERSONALES</i>',
                '<i class="mascota">VOLANTES</i>',
                '<i class="mascota">PASACALLES</i>'
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
    <div class="ready">
        <h1 class="tittles cajatittle">¿DE QUE FORMA QUIERES CRECER HOY?</h1>
    </div>
    <div class="separadorall"></div>
    <div id="containerProducts" class="containerProducts">
            
    </div>

    <script src="../../js/carrito/allp.js"></script>
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
                                <img src="../../img/iconos/ubi.png" alt="" class="footer-iconos">
                            </div>
                            <div>
                                <a href="https://maps.app.goo.gl/NkUMMBjKmGbwSTrk6" target="_blank"><p>Cra. 41A #27 A sur 86 - Centro Ejecutivo La Casona Envigado - Oficina 102</p></a>
                            </div>
                        </div>
                        <div class="fot-flex">
                            <div>
                                <img src="../../img/iconos/mail.png" alt="" class="footer-iconos">
                            </div>
                            <div>
                                <p>gestion@solidasas.com</p>
                            </div>
                        </div>
                        <div class="fot-flex">
                            <div>
                                <img src="../../img/iconos/wats.png" alt="" class="footer-iconos">
                            </div>
                            <div>
                                <!--<a href=""><p>+57 324 569 36 94</p></a>-->
                                <p>+57 324 569 36 94</p>
                            </div>
                        </div>
                        <div class="fot-flex">
                            <div>
                                <img src="../../img/iconos/time.png" alt="" class="footer-iconos">
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
                            <img src="../../img/iconos/in.png" alt="" class="footer-iconos">
                        </div>
                        <div>
                            <a href="https://co.linkedin.com/company/s%C3%B3lida-sas" target="_blank"><p>Linkedin</p></a><br>
                        
                        </div>
                    </div>
                    <div class="fot-flex">
                        <div>
                            <img src="../../img/iconos/igblanco.png" alt="" class="footer-iconos">
                        </div>
                        <div>
                            <a href="https://www.instagram.com/solida360_?igsh=MWFlZW9iaTJ0N3NuMQ%3D%3D" target="_blank"><p>Instagram</p></a>
                        </div>
                    </div>
                    <div class="fot-flex">
                        <div>
                            <img src="../../img/iconos/ttblanco.png" alt="" class="footer-iconos">
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
    	AOS.init();
	</script>
    <script src="../../js/loginadvice.js"></script>
</body>
</html>
