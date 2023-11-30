<!-- Mostrar los libros -->
<?php include 'db_config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
  <div class="container">
    <h1>Lista de libros disponibles</h1>
    <div class="libros">
      <?php
        // Consulta a la base de datos para mostrar los libros
        $query = "SELECT * FROM libros";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='libro'>";
            echo "<h2>{$row['titulo']}</h2>";
            echo "<p>Autor: {$row['autor']}</p>";
            echo "<a href='procesar_pedido.php?id={$row['id']}' class='button'>Solicitar libro</a>";
            echo "</div>";
          }
        } else {
          echo "No hay libros disponibles.";
        }
      ?>
    </div>
  </div>
</body>
</html>
