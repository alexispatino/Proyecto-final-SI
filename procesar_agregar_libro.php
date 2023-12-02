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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $anio = $_POST["anio"];

    // Crear la consulta SQL para insertar el libro
    $sql = "INSERT INTO libros (titulo, autor, anio_publicacion) VALUES ('$titulo', '$autor', '$anio')";

    if ($conn->query($sql) === TRUE) {
        echo "Libro agregado con éxito: Título: $titulo, Autor: $autor, Año: $anio";
    } else {
        echo "Error al agregar el libro: " . $conn->error;
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
  <title>Libro agregado</title>
</head>
<body>
  <div>
    <a href="index.php" class="button">Regresar</a>
  </div>
</body>
</html>
