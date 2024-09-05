<?php 
    session_start();

    include("../../back-end/conexion.php");
    // include("../../back-end/log-in.php");
    $email = $_SESSION['email'];
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
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Document</title>
    <link rel="stylesheet" href="../css/menu-ham.css">
    <link rel="stylesheet" href="../css/intra-net.css">
    <link rel="stylesheet" href="../css/scroll.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
</head>
<body>
    <div class="cont_nav">
        <nav class="nav" id="encabezado">
            <div class="caja-logo">
                <img class="logo" src="../img/iconos/ICONO CON PUNTOS.png" alt="">
            </div>
            <div class="off-screen-menu">
                <ul>
                    <li><a href="../../index.html">INICIO</a></li>
                    <li><a href="config.html">ajustes</a></li>
                    <li><a href="log-in2.html">LOG-OUT</a></li>
                </ul>
            </div>
            
            <nav>
                <div class="ham-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
                <script>
                    const hamMenu = document.querySelector(".ham-menu");
                    const offScreenMenu = document.querySelector(".off-screen-menu");
                    hamMenu.addEventListener("click", () => {
                      hamMenu.classList.toggle("active");
                      offScreenMenu.classList.toggle("active");
                    });
                </script>
            </nav>
    </div>
    
    <section class="menu-lateral">
        <div class="menu-grid">
            <a href="" class="grid-intm">
            <img src="../img/iconos/perfil.png" alt="" class="perfil">
                <div>
                    <?php 
                        echo $_SESSION['name'];
                    ?>
                </div>
            </a>
            
            <a href="" class="grid-intm">  
                <h3>Plan: </h3>
                <?php 
                    echo $_SESSION['plan'];
                ?>
            </a>
            <a href="proyectos.php" class="grid-intm">  
                <h3>Proyectos</h3>
            </a>
            <a href="" class="grid-intm">  
                <h3>Treas</h3>
            </a>
            <a href="" class="grid-intm">  
                <h3>Crear</h3>
            </a>
        </div>
    </section>
    <section class="hero">
        <div class="hero-container">
            <div class="diseñemos">
                <div>
                    
                    <h1 class="tittles">DISEÑEMOS JUNTOS</h1>
                </div>
            </div>
            <div class="text"><h1>Tus Proyectos</h1></div>
            <div class="archivos">

            </div>
        </div>
    </section>
    <script src="../js/pagesload.js"></script>
</body>
</html>