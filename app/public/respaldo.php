<?php
session_start(); // Asegúrate de que la sesión esté activa
$title = "Respaldo"; // Título de la página
$subtitle = "Respaldo de Base de Datos"; // Subtítulo

ob_start(); // Inicia el almacenamiento de la salida
?>

<h2 class="text-center">Respaldo de Base de Datos</h2>
<p class="text-center">Selecciona una opción:</p>

<!-- Opción para realizar respaldo -->
<form method="POST" action="procesar_respaldo.php" class="text-center mt-4">
    <button type="submit" class="btn btn-primary">Realizar Respaldo</button>
</form>

<!-- Opción para restaurar desde un archivo -->
<form method="POST" action="procesar_restaurar.php" enctype="multipart/form-data" class="text-center mt-4">
    <div class="form-group">
        <label for="archivo_respaldo">Selecciona un archivo de respaldo para restaurar:</label>
        <input type="file" class="form-control-file" id="archivo_respaldo" name="archivo_respaldo" required>
    </div>
    <button type="submit" class="btn btn-danger">Restaurar desde Archivo</button>
</form>

<?php
$content = ob_get_clean(); // Almacena el contenido en la variable $content
include 'template.php'; // Incluye la plantilla
?>
