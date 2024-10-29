<?php
$title = "Registro de Usuarios"; // Título de la página

ob_start(); // Inicia el almacenamiento de la salida
?>

<h2 class="text-center">Registro de Usuarios</h2>
<form method="POST" action="procesar_registro_usuario.php" class="mt-4">
    <div class="form-group">
        <label for="nombre_usuario">Nombre de Usuario</label>
        <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" required>
    </div>
    <div class="form-group">
        <label for="correo">Correo Electrónico</label>
        <input type="email" class="form-control" id="correo" name="correo" required>
    </div>
    <div class="form-group">
        <label for="contrasena">Contraseña</label>
        <input type="password" class="form-control" id="contrasena" name="contrasena" required>
    </div>
    <div class="form-group">
        <label for="confirmar_contrasena">Confirmar Contraseña</label>
        <input type="password" class="form-control" id="confirmar_contrasena" name="confirmar_contrasena" required>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Registrar Usuario</button>
</form>

<?php
$content = ob_get_clean(); // Almacena el contenido en la variable $content
include 'template.php'; // Incluye la plantilla
?>
