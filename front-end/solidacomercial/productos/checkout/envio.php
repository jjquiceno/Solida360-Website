<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/solidacomercial/home.css">
    <link rel="stylesheet" href="../../../css/solidacomercial/products.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../../../css/scroll.css">
    <title>Animación Dinámica con Fondo Cambiante</title>
    <style>
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
            transition: background-color 10s linear;
        }
    </style>
</head>
<body>
    <div class="circles" id="circles"></div>
    <div class="header" style="background-color: white;">
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
    <script>
        const circleCount = 10;
        const container = document.getElementById('circles');
        const maxSpeed = 2;
        const circles = [];
        const colors = ['#393E41', '#282828'];

        function getRandomInt(min, max) {
            return Math.floor(Math.random() * (max - min)) + min;
        }

        function createCircle() {
            const circle = document.createElement('div');
            const size = getRandomInt(30, 150);
            circle.classList.add('circle');
            circle.style.width = `${size}px`;
            circle.style.height = `${size}px`;
            circle.style.top = `${getRandomInt(0, 100)}%`;
            circle.style.left = `${getRandomInt(0, 100)}%`;
            container.appendChild(circle);

            const speed = {
                x: (Math.random() - 0.5) * maxSpeed * 2,
                y: (Math.random() - 0.5) * maxSpeed * 2,
            };

            const circleColors = ['rgba(57, 62, 65, 0.32)', 'rgba(184, 198, 108, 0.33)', 'rgba(238, 92, 35, 0.33)', 'rgba(64, 64, 64, 0.1)'];
            setInterval(() => {
                circle.style.backgroundColor = circleColors[getRandomInt(0, circleColors.length)];
            }, 2000);

            circles.push({ element: circle, speed });
            return circle;
        }

        function animateCircles() {
            circles.forEach(circle => {
                const rect = circle.element.getBoundingClientRect();

                if (rect.top <= 0 || rect.bottom >= window.innerHeight) {
                    circle.speed.y *= -1;
                }
                if (rect.left <= 0 || rect.right >= window.innerWidth) {
                    circle.speed.x *= -1;
                }

                circle.element.style.top = `${rect.top + circle.speed.y}px`;
                circle.element.style.left = `${rect.left + circle.speed.x}px`;
            });

            requestAnimationFrame(animateCircles);
        }

        // function changeBackgroundColor() {
        //     document.body.style.backgroundColor = colors[getRandomInt(0, colors.length)];
        //     setTimeout(changeBackgroundColor, 10000);
        // }

        for (let i = 0; i < circleCount; i++) {
            createCircle();
        }

        animateCircles();
        // changeBackgroundColor();
    </script>
</body>
</html>
