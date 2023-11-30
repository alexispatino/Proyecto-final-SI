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
?>

