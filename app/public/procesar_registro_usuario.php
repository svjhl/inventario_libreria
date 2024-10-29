<?php
// Conexión a la base de datos
$servername = "db"; // Cambia si es necesario
$username = "root"; // Cambia si es necesario
$password = "your_password"; // Cambia por la contraseña que configuraste
$dbname = "inventario"; // Cambia por el nombre de tu base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Procesa el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre_usuario = $_POST['nombre_usuario'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $confirmar_contrasena = $_POST['confirmar_contrasena'];

    // Verifica si las contraseñas coinciden
    if ($contrasena !== $confirmar_contrasena) {
        echo "Las contraseñas no coinciden.";
        exit;
    }

    // Hashea la contraseña
    $contrasena_hashed = password_hash($contrasena, PASSWORD_DEFAULT);

    // Inserta el usuario en la base de datos
    $sql = "INSERT INTO usuarios (nombre_usuario, correo, contrasena) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nombre_usuario, $correo, $contrasena_hashed);

    if ($stmt->execute()) {
        echo "Usuario registrado exitosamente.";
    } else {
        echo "Error al registrar el usuario: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
