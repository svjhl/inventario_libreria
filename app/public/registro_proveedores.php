<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $proveedor = $_POST['proveedor'];
    $telefono = $_POST['telefono'];

    $conn = new mysqli('mysql_db', 'user', 'password', 'libreria_db');
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    $sql = "INSERT INTO proveedores (proveedor, telefono) VALUES ('$proveedor', '$telefono')";
    if ($conn->query($sql) === TRUE) {
        echo "Proveedor registrado con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Registro de Proveedores</title>
</head>
<body>
    <div class="container">
        <h2>Registro de Proveedores</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="proveedor" class="form-label">Proveedor</label>
                <input type="text" class="form-control" id="proveedor" name="proveedor" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" required>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
</body>
</html>
