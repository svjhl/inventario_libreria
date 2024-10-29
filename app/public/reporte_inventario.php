<?php
// Incluir el archivo de conexión a la base de datos
include 'db.php'; // Asegúrate de que este archivo contiene la conexión a la base de datos

$title = "Reporte de Inventario por Mes"; // Título de la página

ob_start(); // Inicia el almacenamiento de la salida
?>

<h2 class="text-center">Reporte de Inventario por Mes</h2>

<form method="GET" action="" class="text-center">
    <div class="form-group">
        <label for="mes">Selecciona el Mes:</label>
        <select class="form-control" id="mes" name="mes" required>
            <option value="">Seleccione...</option>
            <option value="1">Enero</option>
            <option value="2">Febrero</option>
            <option value="3">Marzo</option>
            <option value="4">Abril</option>
            <option value="5">Mayo</option>
            <option value="6">Junio</option>
            <option value="7">Julio</option>
            <option value="8">Agosto</option>
            <option value="9">Septiembre</option>
            <option value="10">Octubre</option>
            <option value="11">Noviembre</option>
            <option value="12">Diciembre</option>
        </select>
    </div>
    <div class="form-group">
        <label for="anio">Selecciona el Año:</label>
        <input type="number" class="form-control" id="anio" name="anio" value="<?php echo date('Y'); ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Generar Reporte</button>
</form>

<?php
// Verifica si se ha enviado el mes y el año
if (isset($_GET['mes']) && isset($_GET['anio'])) {
    $mes = $_GET['mes'];
    $anio = $_GET['anio'];

    // Lógica para obtener datos de la base de datos
    $sql = "SELECT * FROM productos WHERE MONTH(fecha) = ? AND YEAR(fecha) = ?"; // Asegúrate de que 'fecha' es la columna correcta
    $stmt = $conn->prepare($sql); // Prepara la consulta
    $stmt->bind_param("ii", $mes, $anio); // Vincula los parámetros
    $stmt->execute(); // Ejecuta la consulta
    $result = $stmt->get_result(); // Obtiene el resultado

    echo "<h3 class='text-center'>Reporte para $mes/$anio</h3>";
    echo "<table class='table'>";
    echo "<thead>
            <tr>
                <th>Nombre del Producto</th>
                <th>Categoría</th>
                <th>Código</th>
                <th>Cantidad Disponible</th>
                <th>Precio Unitario</th>
                <th>Proveedor</th>
            </tr>
          </thead>
          <tbody>";

    // Verifica si hay resultados
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Muestra los datos de cada producto
            echo "<tr>
                    <td>" . htmlspecialchars($row['nombre']) . "</td>
                    <td>" . htmlspecialchars($row['categoria']) . "</td>
                    <td>" . htmlspecialchars($row['codigo']) . "</td>
                    <td>" . htmlspecialchars($row['cantidad_disponible']) . "</td>
                    <td>$" . htmlspecialchars($row['precio_unitario']) . "</td>
                    <td>" . htmlspecialchars($row['proveedor']) . "</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='6' class='text-center'>No se encontraron productos para este mes y año.</td></tr>";
    }

    echo "</tbody></table>";

    // Cierra la declaración y la conexión
    $stmt->close();
    $conn->close();
}

$content = ob_get_clean(); // Almacena el contenido en la variable $content
include 'template.php'; // Incluye la plantilla
?>
