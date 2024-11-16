<?php
$host = '127.0.0.1';
$user = 'root';
$password = '';
$dbname = 'bd_biblioteca';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
