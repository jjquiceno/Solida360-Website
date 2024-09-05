<?php 
    session_start();

    include("conexion.php");

    $email =$_POST['email'];
    $password =$_POST['password'];

    $passlenght=5;

    $consulta ="SELECT * FROM users where email='$email' and pass='$password'";
    $resultado = mysqli_query($conexion,$consulta);

    $filas = mysqli_fetch_array($resultado);

    if(strlen($password) == $passlenght){
        $_SESSION['email'] = $email;
        echo '
            <script>
                alert("por seguridad de tu cuenta cambia tu controseña desde los ajustes");
                window.location.href="../front-end/t e m p l a t e s/intra-net.php"
            </script>
        ';
    }else{
        if($email == "" or $password == ""){
            echo '
            <script>
                alert("Aún hay campos sin completar");
                window.location.href = "../front-end/t e m p l a t e s/log-in.html"
            </script>
            ';
            exit;
        }else{
            if($filas){
                $_SESSION['email'] = $email;
                echo '
                    <script>
                        window.location.href="../front-end/t e m p l a t e s/intra-net.php"
                    </script>
                ';
            }else{ 
                echo '
                    <script>
                        alert("usuario y/o contraseña incorrectos o no registrados");
                        window.location="../front-end/t e m p l a t e s/log-in.html"
                    </script>
                ';
            }
        }
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
    $conexion->close();