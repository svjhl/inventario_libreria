<h2 class="text-center">Registro de Proveedores</h2>
<form method="POST" action="procesar_registro_proveedor.php" class="mt-4">
    <div class="form-group">
        <label for="nombre_proveedor">Nombre del Proveedor</label>
        <input type="text" class="form-control" id="nombre_proveedor" name="nombre_proveedor" required>
    </div>
    <div class="form-group">
        <label for="contacto">Contacto</label>
        <input type="text" class="form-control" id="contacto" name="contacto" required>
    </div>
    <div class="form-group">
        <label for="telefono">Teléfono</label>
        <input type="tel" class="form-control" id="telefono" name="telefono" required>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Registrar Proveedor</button>
</form>
