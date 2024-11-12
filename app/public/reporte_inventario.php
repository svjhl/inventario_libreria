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
        <input type="number" class="form-control" id="anio" name="anio" value="" required>
    </div>
    <button type="submit" class="btn btn-primary">Generar Reporte</button>
</form>

<!-- Tabla para mostrar el reporte -->
<h3 class='text-center'>Reporte para [Mes/Año]</h3>
<table class='table'>
    <thead>
        <tr>
            <th>Nombre del Producto</th>
            <th>Categoría</th>
            <th>Código</th>
            <th>Cantidad Disponible</th>
            <th>Precio Unitario</th>
            <th>Proveedor</th>
        </tr>
    </thead>
    <tbody>
        <!-- Aquí se mostrarán los resultados de la consulta -->
        <tr>
            <td colspan='6' class='text-center'>No se encontraron productos para este mes y año.</td>
        </tr>
    </tbody>
</table>
