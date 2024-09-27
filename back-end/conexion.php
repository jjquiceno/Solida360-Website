<?php

    $servidor = "127.0.0.1:3306";
    $user = "u434920286_1033SOLIDA180u";
    $password = "Quesito.com2";
    $database = "u434920286_oulo1033150sol";

    $conexion = mysqli_connect($servidor,$user,$password,$database);
    return $conexion;