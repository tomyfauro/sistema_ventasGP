<?php
$host = "localhost";
$user = "root";
$clave = "";
$bd = "sis_venta";
$conexion = mysqli_connect($host, $user, $clave, $bd);

if (mysqli_connect_errno()) {
    echo "No se pudo conectar a la base de datos";
    exit();
}

mysqli_set_charset($conexion, "utf8");

echo "Conexión exitosa a la base de datos.<br>";
echo "Versión del servidor MySQL: " . mysqli_get_server_info($conexion) . "<br>";
echo "Información de la base de datos: " . mysqli_get_host_info($conexion) . "<br>";
?>
