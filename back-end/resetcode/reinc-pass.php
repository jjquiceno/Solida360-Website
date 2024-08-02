<?php 
    include("../conexion.php");
    include("code.php");

    $password = $_POST["password"];
    $pass1 = $_POST["pass1"];
    $minlenght = 8;
    $hasMayusculas = preg_match('/[A-Z]/', $password);
    $hasNumber = preg_match('/[0-9]/', $password);
    
    $consulta = "SELECT * FROM users where email='$email'";
    $resultado = mysqli_query($conexion, $consulta);
    $filas = mysqli_fetch_array($resultado);

    if($filas['pass'] == $password){
        if($password != $pass1){
            echo
                "la contraseña no coincide en ambos campos"
                // <script>
                //     alert("la contraseña no coincide en ambos campos");
                //     window.location.href="../../front-end/recuperacion/reinc-pass.php"
                // </script>
            ;
            exit;
        }else{
            if(strlen($password) < $minlenght){
                echo'
                    <script>
                        alert("la contraseña debe tener como minimo 8 caracteres");
                        window.location.href="../../front-end/recuperacion/reinc-pass.php"
                    </script>
                ';
                exit;
            }else{
                if(!$hasMayusculas ){
                    echo'
                        <script>
                            alert("la contraseña debe tener al menos una mayucula");
                            window.location.href="../../front-end/recuperacion/reinc-pass.php"
                        </script>
                    ';
                    exit;
                }else{
                    if(!$hasNumber){
                        echo'
                            <script>
                                alert("la contraseña debe tener al menos un número");
                                window.location.href="../../front-end/recuperacion/reinc-pass.php"
                            </script>
                        ';
                        exit;
                    }else{
                        $sql = "UPDATE `users` SET `pass`='$password' WHERE email='$email'";
                        $query = mysqli_query($conexion, $sql);
                        if($query){
                            echo'
                                <script>
                                    alert("se ha cambiado la contraseña correctamente");
                                    window.location.href = "../../front-end/templates/log-in2.html"
                                </script>
                            ';
                            exit;
                        }else{
                            echo'
                                <script>
                                    alert("ha ocurrido un error");
                                    window.location.href="../../front-end/recuperacion/reinc-pass.php"
                                </script>
                            ';
                            exit;
                        }
                    }
                }
            }
        }
    }