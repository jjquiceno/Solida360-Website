<?php 
    include('../conexion.php');
    // include('code.php');
    
    $resetCode = $_POST['$reset_code'];

    $consulta = "SELECT * FROM users where reset_code='$resetCode'";
    $query = mysqli_query($conexion, $consulta);
    $filas = mysqli_fetch_array($query);

    if($filas['reset_code'] == $resetCode){
        echo'
            <script>
                window.location.href="../../front-end/recuperacion/reinc-pass.html"
            </script>
        ';
        exit;
    }else{
        echo'
            <script>
                alert("el codigo de verificacion es incorrecto");
                window.location.href="../../front-end/recuperacion/codigo.html"
            </script>
        ';
        exit;
    }
