<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];

    $server = "localhost";
    $username = "root";
    $password = "Sopas123.";
    $database = "bdcarrusel1";

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}
    // Verifica que se han llenado todos los campos
    if (empty($nombre) || empty($apellido) || empty($email)) {
        die("No se han llenado todos los campos");
    }

    $sql = "INSERT INTO registro (nombre, apellido, email) VALUES ('$nombre', '$apellido', '$email')";

    if ($conn->query($sql) === TRUE) {
        // Redirige al usuario a la página de confirmación después de guardar los datos
        header("Location: confirmacion.html");
        exit;
    } else {
        echo "Error al guardar los datos: " . $conn->error;
    }

    $conn->close();
}
?>