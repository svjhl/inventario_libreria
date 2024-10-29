<?php
$title = "Reportes de Productos"; // Título de la página

ob_start(); // Inicia el almacenamiento de la salida
?>

<h2 class="text-center">Reportes de Productos</h2>
<ul class="list-group">
    <li class="list-group-item">
        <a href="reporte_inventario.php">Reporte de Inventario por Mes</a>
    </li>
    <li class="list-group-item">
        <a href="reporte_ventas.php">Reporte de Ventas por Producto</a>
    </li>
    <li class="list-group-item">
        <a href="reporte_reabastecer.php">Reporte de Productos por Reabastecer</a>
    </li>
</ul>

<?php
$content = ob_get_clean(); // Almacena el contenido en la variable $content
include 'template.php'; // Incluye la plantilla
?>
