<?php 
    include("../../conexion.php");
    session_start();
    $fila = 'SELECT `name` FROM `users` WHERE id = 5';
    $resultado =  mysqli_query($conexion, $fila);
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
                hola
                <?php 
                    if (mysqli_num_rows($resultado) > 0) {
                        // Si hay resultados, mostrarlos
                        while($row = mysqli_fetch_assoc($resultado)) {
                            $_SESSION['name'] = $row['name'];
                            echo $_SESSION['name'];
                        }
                    } else {
                        echo "0 results";
                    }
                ?>
            </h1>
        </div>
    </div>
</body>
</html>