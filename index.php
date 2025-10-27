<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Notas App</title>
    <link rel="stylesheet" href="CSS/inicio.css">

</head>
<body>
    <h1>Notas App </h1>

    <form action="agregar.php" method="POST">
        <input type="text" name="titulo" placeholder="Título de la nota" required>
        <textarea name="contenido" placeholder="Escribe tu nota..." required></textarea>
        <button type="submit">Agregar Nota</button>
    </form>

