<?php
// inicio de la sesion
    session_start();
// verificacion
    if(!isset($_SESSION['user_id'])) {
        header("Location: ../front-end/templates/log-in.html");
        exit();
    }
// mostrar contenido oculto
    echo "Welcome, " . $_SESSION['username'];