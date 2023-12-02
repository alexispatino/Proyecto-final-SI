<?php
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

// Verificar si se han recibido los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['libros'])) {
    $libros_eliminar = $_POST['libros'];

    foreach ($libros_eliminar as $libro_id) {
        // Crear la consulta SQL para eliminar el libro
        $sql = "DELETE FROM libros WHERE id = $libro_id";

        if ($conn->query($sql) === TRUE) {
            echo "Libro con ID $libro_id eliminado con éxito<br>";
        } else {
            echo "Error al eliminar el libro con ID $libro_id: " . $conn->error;
        }
    }
}

// Cerrar la conexión
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eliminar libro</title>
</head>
<body>
  <a href="index.php" class="button">Regresar</a>
</body>
</html>