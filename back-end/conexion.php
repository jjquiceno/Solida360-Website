<?php

    $servidor = "localhost";
    $user = "root";
    $password = "";
    $database = "usuarios";

    $conexion = mysqli_connect($servidor,$user,$password,$database);
    return $conexion;