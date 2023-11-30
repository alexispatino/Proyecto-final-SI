<!-- procesar_pedido.php -->
<?php include 'db_config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Encabezado, etiquetas meta, enlace a CSS, etc. -->
</head>
<body>
  <div class="container">
    <?php
      if (isset($_GET['id'])) {
        $libro_id = $_GET['id'];
        // Realizar acciones para procesar el pedido del libro con el ID seleccionado
        // Podrías ejecutar actualizaciones en la base de datos u otras acciones aquí
        echo "<h1>Gracias por pedir el libro</h1>";
        echo "<p>Pasa a recogerlo por favor.</p>";
        echo "<a href='index.php' class='button'>Regresar a la página principal</a>";
      } else {
        echo "<h1>Error: Libro no especificado</h1>";
        echo "<p>No se seleccionó ningún libro para pedir.</p>";
        echo "<a href='mostrar_libros.php' class='button'>Volver a la lista de libros</a>";
      }
    ?>
  </div>
</body>
</html>
