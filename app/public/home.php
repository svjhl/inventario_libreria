<?php
session_start(); // Asegúrate de que la sesión esté activa
$title = "Home"; // Título de la página

ob_start(); // Inicia el almacenamiento de la salida
?>

<h2 class="text-center">Bienvenido al Sistema de Inventario</h2>
<p class="text-center">Este es un sistema para gestionar el inventario de la librería.</p>
<p class="text-center">Utiliza el menú a la izquierda para navegar.</p>

<?php
$content = ob_get_clean(); // Almacena el contenido en la variable $content
include 'template.php'; // Incluye la plantilla
?>






