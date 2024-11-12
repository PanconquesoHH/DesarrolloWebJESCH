<?php
// conexion.php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "bd_elecciones"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);
?>
