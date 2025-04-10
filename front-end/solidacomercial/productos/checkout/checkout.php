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
    <link rel="stylesheet" href="../../../css/solidacomercial/home.css">
    <link rel="stylesheet" href="../../../css/solidacomercial/products.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../../../css/scroll.css">
    <link rel="stylesheet" href="animacion.css">
    <title>Document</title>
    <style>
        .revisiones{
            height: fit-content;
        }
        .semiradio-izquierda{
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
            min-height: 200px;
            height: fit-content;
        }
        #invert-position{
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
        #continueB{
            border-radius: 10px;
            border: none;
            height: 200px;
            width: 300px;
            font-family: graphie-regular;
            font-size: 3rem;
            background: linear-gradient(45deg, #393E41, #b8c66c);
            cursor: pointer;
            transition: .5s ease;
        }
        #continueB:hover{
            transition: .5s ease;
            box-shadow: 0 0 40px 5px rgba(184, 198, 108, 0.29); 
            font-size: 2.5rem;
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
        @media screen and (max-width: 1050px){
            .h3{
                display: none;
            }
            .h2{
                font-size: 3rem;
            }
            .info-continue{
                width: fit-content;
                border-radius: 40px;
                height: fit-content;
                padding: 10px;
            }
            #continue{
                display: flex;
                flex-direction: column;
            }
            .foot-interior{
                justify-content: center;
                align-items: center;
                flex-direction: column;
                height: 100%;
            }
            .fot-info{
                margin: 25px 0;
            }
        }
    </style>
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
                    <p class="" id="none">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad porro alias sed, veritatis ullam nobis iusto velit officia suscipit provident iure perferendis aspernatur sapiente eveniet inventore asperiores similique ut corporis.</p>
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
                            <input id="contra" class="caja_text" type="password" name="password" required>
                            <label class="label" for="password">CONTRASEÑA</label>
                            <i id="eye" class="fa-solid fa-eye"></i>
                            <i id="no-eye" class="fa-solid fa-eye-slash"></i>
                            <span></span>
                        </div>
                        <div style="display: none;">
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
                            <div id="logoutbutton" class="campos">
                                <form name="closeform" style="height: fit-content;" action="../../../../back-end/log-out.php" method="post">
                                    
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
                            <div id="loginB">
                                <h2 id="loginButton" class="campos light-w" style="font-size: 1.2rem; cursor: pointer;">login</h2>
                            </div>
                            <div id="configButton">
                                <h2 id="cob" class="campos light-w" style="font-size: 1.2rem; cursor: pointer;">Ajustes de tu perfil</h2>
                            </div>
                            <div id="homeComer" class="campos">
                                <h2 id="vbackh" class="light-w" style="font-size: 1.2rem; cursor: pointer;">Volver al comercio</h2>
                            </div>
                            <div id="allProducts" class="campos">
                                <h2 class="light-w" style="font-size: 1.2rem; cursor: pointer;"><a id="enlaceP" href="../allproducts.php">Ver todos los productos</a></h2>
                                <script>
                                    document.getElementById('vbackh').addEventListener("click", () => {
                                        window.location.href = '../../homecomer.php';
                                    })
                                </script>
                            </div>
                            <div class="campos">
                                <h2 class="light-w"><a href="../../../../index.html" style="text-decoration: none; color: black; font-size: 1.2rem;">Salir del comercio y volver al inicio</a></h2>
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
                <div style="position: relative;" id="busqueda-box">
                    <input type="text" id="search-input" class="busqueda regular" name="search" placeholder="Buscar productos" onkeyup="searchFunction()">
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
                    <!-- <div id="totalcontainer">
                        <p>Sub<br>total: <span id="signo">$</span><span id="total-precio"></span></p>
                        <button id="pedir" class="">CHECKOUT</button>
                        <script>
                            document.getElementById('pedir').addEventListener('click', function() {
                                this.classList.add('rebotar');

                                setTimeout(() =>{
                                    this.classList.remove('rebotar');
                                    window.location.href = "checkout.php";
                                }, 500)
                            })
                        </script>
                    </div> -->
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
                <h2 class="bold black">Sub total: </h2>
                <span class="bold black" id="signo">$</span><span class="light black" id="total-precio"></span>
            </div>
            <div class="separador-tenue"></div>
            <h2 class="bold black">Datos adicionales:</h2>
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
    <script src="../../../js/loginadvice.js"></script>
    <!-- <script src="../../../js/carrito/addtocart.js"></script> -->
</body>
</html>