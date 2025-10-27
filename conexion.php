<?php
$conexion = new mysqli("localhost", "root", "", "notas_app");

if ($conexion->connect_error) {
    die("❌ Error de conexión a la base de datos: " . $conexion->connect_error);
}
?>
