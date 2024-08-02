<?php
include("conexion.php");

$oldpass=$_POST["oldpass"];
$pass1=$_POST["pass1"];
$password=$_POST['password'];

$minlenght=8;
$mayusculas=preg_match('/[A-Z]/', $password);
$hasNumber = preg_match('/[0-9]/', $password);

$consulta = "SELECT * FROM users where pass='$oldpass'";
$resultado = mysqli_query($conexion,$consulta);
$filas=mysqli_fetch_array($resultado);

if($filas['pass'] == $oldpass){
    if($pass1 != $password){
        echo'
            <script>
                alert("la contraseña no coincide en ambos campos, por favor verificala y vuelve a ingresarla");
                window.location.href = "../front-end/templates/change-pass.html"
            </script>
        ';
        exit;
    }else{
        if(strlen($password) < $minlenght){
            echo'
                <script>
                    alert("la contraseña debe tener como minimo 8 caracteres");
                    window.location.href="../front-end/templates/change-pass.html"
                </script>
            ';
            exit;
        }else{
            if(!$mayusculas){
                echo'
                    <script>
                        alert("la contraseña debe tener al menos una letra mayuscula");
                        window.location.href="../front-end/templates/change-pass.html"
                    </script>
                ';
                exit;
            }else{
                if(!$hasNumber){
                    echo'
                        <script>
                            alert("la contraseña debe tener al menos un numero");
                            window.location.href="../front-end/templates/change-pass.html"
                        </script>
                    ';
                    exit; 
                }else{
                    $sql="UPDATE `users` SET `pass`='$password' WHERE pass='$oldpass'";
                    $query=mysqli_query($conexion,$sql);
                    if($query){
                        echo'
                            <script>
                                alert("se ha cambiado la contraseña");
                                window.location.href = "../front-end/templates/config.html"
                            </script>
                        ';
                        exit;
                    }else{
                        echo '
                            <script>
                                alert("ha ocurrido un error");
                                window.location.href = "../front-end/templates/change-pass.html"
                            </script>
                        ';
                    }
                }
            }
        }
    }
    
}else{
    echo '
    <script>
        alert("la contraseña anterior no coincide");
        window.location.href="../front-end/templates/change-pass.html"
    </script>';
    exit;
}
if($pass1 != $password){
    echo'
        <script>
            alert("la contraseña no coincide en ambos campos, por favor verificala y vuelve a ingresarla");
            window.location.href = "../front-end/templates/change-pass.html"
        </script>
    ';
    exit;
}else{
    if(strlen($password) < $minlenght){
        echo'
            <script>
                alert("la contraseña debe tener como minimo 8 caracteres");
                window.location.href="../front-end/templates/change-pass.html"
            </script>
        ';
        exit;
    }else{
        if(!$mayusculas){
            echo'
                <script>
                    alert("la contraseña debe tener al menos una letra mayuscula");
                    window.location.href="../front-end/templates/change-pass.html"
                </script>
            ';
            exit;
        }else{
            if(!$hasNumber){
                echo'
                    <script>
                        alert("la contraseña debe tener al menos un numero");
                        window.location.href="../front-end/templates/change-pass.html"
                    </script>
                ';
                exit; 
            }else{
                $sql="UPDATE `users` SET `pass`='$password' WHERE pass='$oldpass'";
                $query=mysqli_query($conexion,$sql);
                if($query){
                    echo'
                        <script>
                            alert("se ha cambiado la contraseña");
                            window.location.href = "../front-end/templates/config.html"
                        </script>
                    ';
                    exit;
                }else{
                    echo '
                        <script>
                            alert("ha ocurrido un error");
                            window.location.href = "../front-end/templates/change-pass.html"
                        </script>
                    ';
                }
            }
        }
    }
}
