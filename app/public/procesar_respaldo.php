<?php
// Datos de conexión a la base de datos
$host = 'mysql'; // Nombre del servicio MySQL en docker-compose
$user = 'user';
$password = 'password';
$dbname = 'libreria_db';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['archivo_respaldo'])) {
    $archivoRespaldo = $_FILES['archivo_respaldo']['tmp_name'];

    if (file_exists($archivoRespaldo)) {
        // Ejecutar el comando mysql para restaurar la base de datos
        $command = "mysql -h $host -u $user -p$password $dbname < $archivoRespaldo";
        system($command, $output);

        if ($output === 0) {
            echo "Restauración realizada con éxito.";
        } else {
            echo "Error al restaurar la base de datos.";
        }
    } else {
        echo "El archivo de respaldo no existe.";
    }
} else {
    echo "No se ha recibido ningún archivo.";
}
?>
