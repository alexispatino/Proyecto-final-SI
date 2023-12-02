<!DOCTYPE html>
<html>
<head>
    <title>Eliminar Libro</title>
</head>
<body>
    <h2>Eliminar Libro</h2>
    <form action="procesar_eliminar_libro.php" method="POST">
        <?php
        // Conexión a la base de datos (usando los detalles de conexión)
        $servername = "localhost";
        $username = "root";
        $password = "Ap318002334*";
        $dbname = "biblioteca";

        // Crear conexión con MySQLi
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Consulta para obtener todos los libros disponibles
        $sql = "SELECT * FROM libros";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Mostrar lista de libros con checkboxes
            while ($row = $result->fetch_assoc()) {
                echo '<input type="checkbox" name="libros[]" value="' . $row['id'] . '">' . $row['titulo'] . ' - ' . $row['autor'] . '<br>';
            }
        } else {
            echo "No se encontraron libros";
        }

        // Cerrar la conexión
        $conn->close();
        ?>
        <button type="submit">Eliminar Libro(s) Seleccionado(s)</button>
    </form>
    <a href="index.php" class="button">Regresar</a>
</body>
</html>
