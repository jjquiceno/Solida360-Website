<?php

    $servidor = "localhost";
    $user = "root";
    $password = "";
    $database = "solidasas";

    $conexion = mysqli_connect($servidor,$user,$password,$database);
    return $conexion;