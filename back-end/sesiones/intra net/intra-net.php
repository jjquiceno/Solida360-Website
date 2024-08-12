<?php 
    include("../../conexion.php");
    session_start();
    $fila = 'SELECT `name` FROM `users` WHERE id = 5';
    $resultado =  
    $_SESSION['name'] = $fila;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <div>
            <h1>
                <?php 
                    echo $_SESSION['name'];
                ?>
            </h1>
        </div>
    </div>
</body>
</html>