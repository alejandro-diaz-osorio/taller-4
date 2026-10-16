<?php
$host = "db-mysql"; // <- ¡IMPORTANTE! Este será el nombre del servicio en Docker
$dbname = "db_proyecto_mvc";
$usuario = "root";
$contrasena = "clave_secreta_nube";
try {
    // Creamos la conexión usando el objeto PDO
    $conexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $usuario, $contrasena);

    // Configuramos PDO para que lance excepciones en caso de errores
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Si hay un error de conexión, detiene el script y lo muestra
    echo "Error crítico de conexión: " . $e->getMessage();
}
