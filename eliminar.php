<?php
include("conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM notas WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error al eliminar: " . $conn->error;
}
?>
