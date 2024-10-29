<?php
// PHP para procesar el login
session_start(); // Inicia la sesión para manejar el estado de sesión
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Comprobación de las credenciales
    if ($username === 'admin' && $password === 'password123') {
        $_SESSION['loggedin'] = true; // Establecer variable de sesión
        $_SESSION['username'] = $username; // Almacenar el nombre de usuario
        header("Location: home.php"); // Redirigir a home.php
        exit(); // Asegurarse de que el script se detenga después de la redirección
    } else {
        echo "<script>alert('Nombre de usuario o contraseña incorrectos.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('img/fondo.jpg'); /* Ruta de la imagen de fondo */
            background-size: cover; /* Ajusta la imagen para que cubra toda la pantalla */
            background-repeat: no-repeat;
            background-position: center;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.8); /* Fondo blanco semitransparente */
            padding: 20px;
            border-radius: 10px;
            max-width: 400px;
            margin-top: 100px;
        }

        .titulo {
            font-weight: bold; /* Para negrita */
            font-family: 'Arial', sans-serif; /* Cambia 'Arial' por la fuente que prefieras */
            text-align: center; /* Centrar texto */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5">LIBRERIA<br>MIL COLORES</h1>
        <h2 class="text-center mt-5">Login</h2>
        <form method="POST" action="index.php" class="mt-4">
            <div class="form-group">
                <label for="username">Nombre de usuario</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
        </form>
    </div>
</body>
</html>
