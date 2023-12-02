<!DOCTYPE html>
<html>
<head>
    <title>Agregar Libro</title>
</head>
<body>
    <h2>Agregar Libro</h2>
    <form action="procesar_agregar_libro.php" method="POST">
        <!-- Aquí debes agregar campos para el formulario de agregar libro (nombre, autor, año, etc.) -->
        <input type="text" name="titulo" placeholder="Título" required><br>
        <input type="text" name="autor" placeholder="Autor" required><br>
        <input type="number" name="anio" placeholder="Año" required><br>
        <button type="submit">Agregar</button>
    </form>
    <a href="index.php">Regresar</a>
</body>
</html>
