<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dulces_del_valle";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
