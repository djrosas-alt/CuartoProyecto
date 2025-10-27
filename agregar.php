<?php
include("conexion.php");

$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];

$sql = "INSERT INTO notas (titulo, contenido) VALUES ('$titulo', '$contenido')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $conn->error;
}
?>
