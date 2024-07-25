<?php 
    include("conexion.php");

    $email =$_POST['email'];
    $password =$_POST['password'];

    $passlenght=5;

    $consulta ="SELECT * FROM users where email='$email' and pass='$password'";
    $resultado = mysqli_query($conexion,$consulta);

    $filas = mysqli_fetch_array($resultado);

    if(strlen($password) == $passlenght){
        echo '
            <script>
                alert("por seguridad de tu cuenta cambia tu controseña desde los ajustes");
                window.location.href="../front-end/templates/intra-net.html"
            </script>
        ';
    }else{
        if($email == "" or $password == ""){
            echo '
            <script>
                alert("Aún hay campos sin completar");
                window.location.href = "../front-end/templates/log-in.html"
            </script>
            ';
        exit;
        }else{
            if($filas){
                echo '
                    <script>
                        window.location.href="../front-end/templates/intra-net.html"
                    </script>
                ';
            }else{
                echo '
                    <script>
                        alert("usuario y/o contraseña incorrectos o no registrados");
                        window.location="../front-end/templates/log-in.html"
                    </script>
                ';
            }
        }
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);