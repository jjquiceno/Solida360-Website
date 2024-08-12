<?php
    include("conexion.php");
    $email = "quicenolondonoj@gmail.com";
    $nombre = "SELECT name FROM users where email='$email'";
    $resultado = mysqli_query($conexion, $nombre);
    $filas = mysqli_fetch_array($resultado);
    echo "hola " . $filas;
