<?php
include 'conexion.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $razon_social = $_POST['razon_social'];
    $nombre = $_POST['nombre'];
    $correo_electronico = $_POST['correo_electronico'];
    $telefono = $_POST['telefono'];
    $direccion_envio = $_POST['direccion_envio'];
    $municipio = $_POST['municipio'];
    $barrio = $_POST['barrio'];
    $codigo_postal = $_POST['codigo_postal'];
    $cedula_num = $_POST['cedula_num'];
    $estado_pago = $_POST['estado_pago'];
    $costo_pedido = $_POST['costo_pedido'];
    $descripcion_pedido = $_POST['descripcion_pedido'];

    // Prepare SQL statement
    if (empty($razon_social) || empty($nombre) || empty($correo_electronico) || empty($telefono) || empty($direccion_envio) || empty($municipio) || empty($barrio) || empty($codigo_postal) || empty($cedula_num) || empty($estado_pago) || empty($costo_pedido) || empty($descripcion_pedido)) {
        echo '
            <script>
                alert("aun hay campos vacios, por favor complete la informacion");
                window.location.href = "../front-end/solidacomercial/products/checkout/envio.php";
            </script>
        ';
    } else {
        $sql = "INSERT INTO envios (razon_social, nombre, correo_electronico, telefono, direccion_envio, municipio, barrio, codigo_postal, cedula_num, estado_pago, costo_pedido, descripcion_pedido)
                VALUES ('$razon_social', '$nombre', '$correo_electronico', '$telefono', '$direccion_envio', '$municipio', '$barrio', '$codigo_postal', '$cedula_num', '$estado_pago', '$costo_pedido', '$descripcion_pedido')";

        // Execute the query
        if (mysqli_query($conexion, $sql)) {
            $email = "quicenolondonoj@gmail.com"; 
            $destinatario = "programacion@solidasas.com";

            $contenido = "Se ha hecho un pedido en la pagina web de: $nombre, \n";
            $contenido .= "Email del cliente: $correo_electronico \n";
            $contenido .= "Telefono del cliente: $telefono \n";
            $contenido .= "Pedido: $descripcion_pedido";
            $contenido .= "el costo del pedido es: $costo_pedido \n";
            $asunto = "Pedido desde la pagina web";
            $header = "From: $email"; 

            $mail = mail($destinatario, $asunto, $contenido, $header);

            if ($mail) {
                echo "<script>alert('El correo se envio correctamente :)')</script>";
            } else {
                echo "<script>alert('El correo no se pudo enviar, intente nuevamente :(')</script>";
            }
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        }
        echo '
                <script>
                    window.location.href = "../front-end/solidacomercial/products/checkout/envio.php"
                </script>
            ';


        // Close the connection
        mysqli_close($conexion);
    }

} else {
    echo "No se recibió ningún dato.";
}
