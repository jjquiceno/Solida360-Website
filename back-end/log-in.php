<?php 
    session_start();

    include("conexion.php");

    $email =$_POST['email'];
    $password =$_POST['password'];
    $ubicacion =$_POST['ubicacionValue'];
    $passlenght=5;
    $sesionSttatus = 0;

    $consulta ="SELECT * FROM users where email='$email' and pass='$password'";
    $resultado = mysqli_query($conexion,$consulta);

    $filas = mysqli_fetch_array($resultado);

    if($email == "" or $password == ""){
        echo '
        <script>
            alert("esta es la salida de error 1, Aún hay campos sin completar");
            window.location.href = "' . $ubicacion . '";
        </script>
        ';
        exit;
    }else{
        if($filas){
            if(strlen($password) == $passlenght){
                $_SESSION['email'] = $email;
                echo'
                    <script>
                        alert("por seguridad, cambia tu contraseña");
                        window.location.href = "' . $ubicacion . '";
                    </script>
                ';
            }else{
                $_SESSION['email'] = $email;
                echo '
                    <script>
                        var ubicacion = "' . $ubicacion . '";
                        alert("esta es la cuarta salida, ubicacion: " + ubicacion);
                        // window.location.href="../front-end/t e m p l a t e s/intra-net.php";
                        window.location.href = "' . $ubicacion . '";
                    </script>
                ';
            }
        }else{ 
            echo '
                <script>
                    alert("usuario y/o contraseña incorrectos o no registrados");
                    // window.location="../front-end/t e m p l a t e s/intra-net.php"
                    window.location.href = "' . $ubicacion . '";
                </script>
            ';
        }
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
    $conexion->close();