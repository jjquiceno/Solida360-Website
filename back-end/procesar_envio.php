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

    // Prepare SQL statement
    if (empty($razon_social) || empty($nombre) || empty($correo_electronico) || empty($telefono) || empty($direccion_envio) || empty($municipio) || empty($barrio) || empty($codigo_postal) || empty($cedula_num)) {
        echo '
            <script>
                alert("aun hay campos vacios, por favor complete la informacion");
                window.location.href = "../front-end/solidacomercial/products/checkout/envio.php";
            </script>
        ';
    } else {
        $sql = "INSERT INTO envios (razon_social, nombre, correo_electronico, telefono, direccion_envio, municipio, barrio, codigo_postal, cedula_num) 
                VALUES ('$razon_social', '$nombre', '$correo_electronico', '$telefono', '$direccion_envio', '$municipio', '$barrio', '$codigo_postal', '$cedula_num')";

        // Execute the query
        if (mysqli_query($conexion, $sql)) {
            echo '
                <script>
                    window.location.href = "../front-end/solidacomercial/products/checkout/c_datos.php"
                </script>
            ';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        }

        // Close the connection
        mysqli_close($conexion);
    }

} else {
    echo "No se recibió ningún dato.";
}
