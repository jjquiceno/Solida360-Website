<?php 
    session_start();

    include("../../back-end/conexion.php");
    // include("../../back-end/log-in.php");
    $email = $_SESSION['email'];
    $fila = "SELECT `name` FROM `users` WHERE email = '$email' ";
    $resultado =  mysqli_query($conexion, $fila);

    if (mysqli_num_rows($resultado) > 0) {
        // Si hay resultados, mostrarlos
        while($row = mysqli_fetch_assoc($resultado)) {
            $_SESSION['name'] = $row['name'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo $_SESSION['name'];
    ?>
</body>
</html>