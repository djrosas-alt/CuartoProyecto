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

    <h2>Lista de notas:</h2>
    <div class="notas">
        <?php
        $sql = "SELECT * FROM notas ORDER BY fecha DESC";
        $resultado = $conn->query($sql);

        if ($resultado->num_rows > 0) {
            while ($nota = $resultado->fetch_assoc()) {
                echo "<div class='nota'>";
                echo "<h3>" . htmlspecialchars($nota['titulo']) . "</h3>";
                echo "<p>" . htmlspecialchars($nota['contenido']) . "</p>";
                echo "<small>" . $nota['fecha'] . "</small><br>";
                echo "<a href='eliminar.php?id=" . $nota['id'] . "'> Eliminar</a>";
                echo "</div>";
            }
        } else {
            echo "<p>No hay notas todavía </p>";
        }
        ?>
    </div>
</body>
</html>
