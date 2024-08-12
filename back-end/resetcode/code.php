<?php
// send_reset_code.php
include ("../conexion.php"); // Asegúrate de tener un archivo para la conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Verificar si el correo electrónico existe en la base de datos
    $stmt = $conexion->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        // Generar un código temporal
        $reset_code = bin2hex(random_bytes(3));
        $expiry_time = date("Y-m-d H:i:s", strtotime('+1 hour'));

        // Guardar el código en la base de datos
        $stmt = $conexion->prepare("UPDATE users SET reset_code = ?, reset_expiry = ? WHERE email = ?");
        $stmt->bind_param("sss", $reset_code, $expiry_time, $email);
        $stmt->execute();

        // Enviar el código por correo electrónico
        $destinatario = $email;
        $asunto = "codigo de verificacion para recuperar la contraseña";
        $contenido = "tu codigo de recuperacion de contraseña es: $reset_code";

        $headers = "From: programacion@solidasas.com";  
        $Mail = mail($destinatario, $asunto, $contenido, $headers);

        if ($Mail) {
            echo '
                <script>
                    alert("El correo se envio correctamente :)")
                    window.location.href="../../front-end/recuperacion/codigo.html"
                </script>
            ';
            exit;
        } else {
            echo "<script>alert('El correo no se pudo enviar, intente nuevamente :(')</script>";
        }
    } else {
        echo "El correo electrónico no existe en nuestra base de datos.";
    }

    $stmt->close();
    $conexion->close();
}