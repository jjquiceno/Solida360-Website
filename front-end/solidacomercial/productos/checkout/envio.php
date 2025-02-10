<?php 
    session_start();
    // $_SESSION['loggedin'] = true;
    include("../../../../back-end/conexion.php");
    // include("../../back-end/log-in.php");
    $status = $_SESSION['status'] = 1;
    if(isset($_SESSION['email'])){
        $email = $_SESSION['email'];
    }else{
        $email = "";
    }
    $fila = "SELECT `name`, `phone_number`, `documento` FROM `users` WHERE email = '$email' ";
    $plan = "SELECT `plan` FROM `users` WHERE email = '$email' ";
    $resultado =  mysqli_query($conexion, $fila);
    $resultplan = mysqli_query($conexion, $plan);

    if (mysqli_num_rows($resultado) > 0) {
        // Si hay resultados, mostrarlos
        while($row = mysqli_fetch_assoc($resultado)) {
            $_SESSION['name'] = $row['name'];
            $_SESSION['phone_number'] = $row['phone_number'];
            $_SESSION['documento'] = $row['documento'];
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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/solidacomercial/home.css">
    <link rel="stylesheet" href="../../../css/solidacomercial/products.css">
    <link rel="stylesheet" href="../../../css/solidacomercial/envios.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../../../css/scroll.css">
    <title>Animación Dinámica con Fondo Cambiante</title>
    <style>
        .header{
            background-color: white;
        }
        body {
            margin: 0;
            overflow-y: scroll; /* Permitir el scroll vertical */
            overflow-x: hidden;
            /* background-color: #121212; */
            transition: background-color 10s linear;
        }
        .circles {
            position: fixed; /* Fijar el contenedor de los círculos */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1; /* Asegurar que el fondo esté detrás del contenido */
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
    <script src="../../../js/circles.js"></script>
    <div id="containerAlert">
        <div id="alert" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="2000">
            <div id="flex-x">
                <i id="cerrar-alert" class="fa-solid fa-xmark fa-2x" style="cursor: pointer;"></i>
            </div>
            <div id="alert-flex">
                <div>
                    <h2 class="tittles">Queremos Saber quien eres</h2>
                    <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad porro alias sed, veritatis ullam nobis iusto velit officia suscipit provident iure perferendis aspernatur sapiente eveniet inventore asperiores similique ut corporis.</p>
                </div>
                <div class="form">
                    <form name="form" action="../../../../back-end/log-in.php" method="post" class="form_f">
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
            <div class="logo-box" style="padding-left: 15px; display: flex; align-items: center;">
                <div id="menuSesion">
                    <i class="fa-solid fa-bars fa-2x"></i>
                </div>
                <div id="menuSesionFloat">
                    <div style="width: 90%; height: 90%;">
                        <div>
                            <div class="iconos-box">
                                <i id="closeMenuSesion" class="fa-solid fa-xmark fa-2x" style="cursor: pointer;"></i>
                                <img class="logo" src="../../../img/iconos/ICONO CON PUNTOS.png" alt="">
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
                        <br>
                        <div class="contactOptions">
                            <h2 id="contactTittle" class="bold" style="font-size: 1.2rem; cursor: default;">¿Necesiats ayuda? ¡CONTACTANOS!</h2>
                            <div id="contactList">
                                <ul style="list-style: none;">
                                    <li class="bold"><a href="" class="black" style="text-decoration: none; font-size: 1rem;">Whatsapp</a></li>
                                    <li class="bold"><a href="" class="black" style="text-decoration: none; font-size: 1rem;">correo</a></li>
                                    <li class="bold"><a href="" class="black" style="text-decoration: none; font-size: 1rem;">instagram</a></li>
                                    <li class="bold"><a href="" class="black" style="text-decoration: none; font-size: 1rem;">linkedin</a></li>
                                </ul>
                            </div>
                            
                            <script>
                                const tittle = document.getElementById('contactTittle');
                                const contactList = document.getElementById('contactList');
                                contactList.style.display = 'none';
                                tittle.addEventListener("click", () => {
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
                        <br>
                        <div id="logoutbutton">
                            <form name="closeform" style="height: 100%;" action="../../../../back-end/log-out.php" method="post">
                                
                                <div style="display: none;">
                                    <!-- <p id="ubicacion">home</p> -->
                                    <p id="pathclose" style="display: none;"></p>
                                    <script>
                                        const pathNameClose = window.location.pathname;
                                        document.getElementById('pathclose').innerHTML = pathName;
                                    </script>
                                    <input type="hidden" name="ubicacionValueclose" id="ubicacionValueClose">
                                </div>
                                <input class="bold" id="closeSesion" for="closeform" style="cursor: pointer; color: black; font-size: 1.2rem; border: none; background: none;" type="submit" value="Cerar Sesion" onclick="document.getElementById('ubicacionValueClose').value = document.getElementById('pathclose').innerText">
                            </form>
                        </div>
                        <div id="loginB">
                            <h2 id="loginButton" class="bold" style="font-size: 1.2rem; cursor: pointer;">login</h2>
                        </div>
                        
                        <br>
                        <div>
                            <h2 class="bold"><a href="../../../../../index.html" style="text-decoration: none; color: black; font-size: 1.2rem;">Salir del comercio y volver al inicio</a></h2>
                        </div>
                        
                        <br>
                        <div>
                            <h2 class="bold"><a href="../../homecomer.php" style="text-decoration: none; color: black; font-size: 1.2rem;">Volver al inicio del comercio</a></h2>
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
            <div class="containerGrid">
                <div style="position: relative;" id="busqueda-box">
                    <input type="text" id="search-input" class="busqueda tittles" name="search" placeholder="Buscar productos" onkeyup="searchFunction()">
                </div>
                <div class="conttt">
                    <!-- <img class="carrito" src="../img/iconos/carrito.png" alt=""> -->
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
            });
        </script>
        <script src="../../../js/carrito/search.js"></script>
    </div>
    <section id="main-content">
        <div id="detallesFact">
            <h2 class="bold" style="font-size: 2rem;">Detalles de Facturacion</h2>
            <div class="separador"></div>
            <form id="envio_form" name="envios_form" action="../../../../back-end/procesar_envio.php" method="post">
                <input type="hidden" name="csrf_token" value="<>">
                <br>
                <div class="row_form">
                    <div class="info-message" data-validate="el correo es requerido">
                        <input class="envio_text" type="text" name="razon_social" required>
                        <label class="envio_label" for="razon_social">RAZON SOCIAL</label>
                        <span></span>
                    </div>
                    <div class="info-message" data-validate="el correo es requerido">
                        <input class="envio_text" id="envio_name" type="text" name="nombre" value="<?php echo $_SESSION['name']; ?>" required>
                        <label class="envio_label" for="nombre">NOMBRE</label>
                        <span></span>
                    </div>
                </div>
                <br>
                <div class="row_form">
                    <div class="info-message" data-validate="el correo es requerido">
                        <input class="envio_text" type="text" id="envio_mail" name="correo_electronico" value="<?php echo $email; ?> " required>
                        <label class="envio_label" for="correo_electronico">EMAIL</label>
                        <span></span>
                    </div>
                    <div class="info-message" data-validate="el correo es requerido">
                        <input class="envio_text" type="text" id="envio_number" name="telefono" value="<?php 
                            if(empty($_SESSION['phone_number'])){
                                echo "";
                            }else{
                                echo $_SESSION['phone_number']; 
                            }
                        ?>" required>
                        <label class="envio_label" for="telefono">TELEFONO</label>
                        <span></span>
                    </div>
                </div>
                <br>
                <div class="row_form">
                    <div class="info-message" data-validate="el correo es requerido">
                        <input class="envio_text" type="text" name="direccion_envio" required>
                        <label class="envio_label" for="direccion_envio">DIRECCION</label>
                        <span></span>
                    </div>
                    <div class="info-message" data-validate="el correo es requerido">
                        <input class="envio_text" type="text" name="municipio" required>
                        <label class="envio_label" for="municipio">MUNICIPIO</label>
                        <span></span>
                    </div>
                </div>
                <br>
                <div class="row_form">
                    <div class="info-message" data-validate="el correo es requerido">
                        <input class="envio_text" type="text" name="barrio" required>
                        <label class="envio_label" for="barrio">BARRIO</label>
                        <span></span>
                    </div>
                    <div class="info-message" data-validate="el correo es requerido">
                        <input class="envio_text" type="number" name="codigo_postal" required>
                        <label class="envio_label" for="codigo_postal">CODIGO POSTAL</label>
                        <span></span>
                    </div>
                </div>
                <br>
                <div class="row_form">
                    <div class="info-message" data-validate="el correo es requerido">
                        <input class="envio_text" type="number" name="cedula_num" value="<?php echo $_SESSION['documento']; ?>" required>
                        <label class="envio_label" for="cedula_num">N° IDENTIFICACION</label>
                        <span></span>
                    </div>
                    <div class="info-message">
                        <input for="envios_form" type="submit" value="enviar" class="envio_submit regular">
                    </div>
                </div>
                
            </form>
        </div>
        <div></div>
        <div id="cartPreview">


        </div>
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
    <script src="../../../js/loginadvice.js"></script>
    <script src="../../../js/carrito/addtocart.js"></script>
</body>
</html>
