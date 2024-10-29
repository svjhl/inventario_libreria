<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'Sistema de Inventario'; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Color de fondo */
        }
        .sidebar {
            background-color: #343a40; /* Fondo del menú */
            min-height: 100vh;
            padding-top: 20px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #495057; /* Color al pasar el ratón */
            color: white;
        }
        .content {
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-3 col-lg-2 d-md-block sidebar">
                <h4 class="text-center text-white">Opciones del Sistema</h4>
                <div class="nav flex-column">
                    <a class="nav-link" href="home.php">Home</a>
                    <a class="nav-link" href="registro_productos.php">Registro de Productos</a>
                    <a class="nav-link" href="registro_usuarios.php">Registro de Usuarios</a>
                    <a class="nav-link" href="registro_proveedores.php">Registro de Proveedores</a>
                    <a class="nav-link" href="reporte_productos.php">Reporte de Productos</a>
                    <a class="nav-link" href="respaldo.php">Respaldo</a>
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 content">
                <?php
                // Aquí se incluirá el contenido de cada página
                if (isset($content)) {
                    echo $content;
                }
                ?>
            </main>
        </div>
    </div>
</body>
</html>
