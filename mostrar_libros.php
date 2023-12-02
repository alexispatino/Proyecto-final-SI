<!-- mostrar_libros.php -->
<?php include 'db_config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lista de Libros</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }
    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Lista de libros disponibles</h1>
    <table>
      <thead>
        <tr>
          <th>Título</th>
          <th>Autor</th>
          <th>Acción</th>
        </tr>
      </thead>
      <tbody>
        <?php
          // Consulta a la base de datos para mostrar los libros
          $query = "SELECT * FROM libros";
          $result = mysqli_query($conn, $query);
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>";
              echo "<td>{$row['titulo']}</td>";
              echo "<td>{$row['autor']}</td>";
              echo "<td><a href='procesar_pedido.php?id={$row['id']}' class='button'>Solicitar libro</a></td>";
              echo "</tr>";
            }
          } else {
            echo "<tr><td colspan='3'>No hay libros disponibles.</td></tr>";
          }
        ?>
      </tbody>
    </table>

    <a href="index.php" class="button">Regresar</a>
    
  </div>
</body>
</html>
