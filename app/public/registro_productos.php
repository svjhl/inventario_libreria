<?php
$title = "Registro de Productos"; // Título de la página

ob_start(); // Inicia el almacenamiento de la salida
?>

<h2 class="text-center">Registro de Productos</h2>
<form method="POST" action="procesar_registro_producto.php" class="mt-4">
    <div class="form-group">
        <label for="nombre_producto">Nombre del Producto</label>
        <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" required>
    </div>
    <div class="form-group">
        <label for="categoria">Categoría</label>
        <select class="form-control" id="categoria" name="categoria" required>
            <option value="">Selecciona una categoría</option>
            <option value="libros">Libros</option>
            <option value="utiles">Útiles Escolares</option>
            <option value="accesorios">Accesorios</option>
            <!-- Añade más categorías según sea necesario -->
        </select>
    </div>
    <div class="form-group">
        <label for="codigo">Código</label>
        <input type="text" class="form-control" id="codigo" name="codigo" required>
    </div>
    <div class="form-group">
        <label for="cantidad">Cantidad Disponible</label>
        <input type="number" class="form-control" id="cantidad" name="cantidad" required>
    </div>
    <div class="form-group">
        <label for="precio_unitario">Precio Unitario</label>
        <input type="number" step="0.01" class="form-control" id="precio_unitario" name="precio_unitario" required>
    </div>
    <div class="form-group">
        <label for="proveedor">Proveedor</label>
        <input type="text" class="form-control" id="proveedor" name="proveedor" required>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Registrar Producto</button>
</form>

<?php
$content = ob_get_clean(); // Almacena el contenido en la variable $content
include 'template.php'; // Incluye la plantilla
?>
