<?php
    session_start(); // Inicia la sesión
    session_unset(); // Elimina todas las variables de sesión
    session_destroy(); // Destruye la sesión

    $ubicacion =$_POST['ubicacionValueclose'];

    // header("Location: ../front-end/solidacomercial/homecomer.php"); // Redirige a la página de inicio de sesión
    echo '
        <script>
            var ubicacion = "' . $ubicacion . '";
            alert("se esta redirigiendo a: " + ubicacion);
            window.location.href = "' . $ubicacion . '";
        </script>
    ';
    exit();
    
