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