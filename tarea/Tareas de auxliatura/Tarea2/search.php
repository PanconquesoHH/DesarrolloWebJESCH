<?php
require_once 'conexion.php';

$conn->set_charset("utf8mb4"); 

$prompt = trim($_GET['prompt']);

$sql = "SELECT titulo FROM libros WHERE LOWER(TRIM(titulo)) = LOWER(?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $prompt);
$stmt->execute();
$result = $stmt->get_result();

$book = $result->fetch_assoc();

if ($book) {
    echo json_encode($book);
} else {
    echo json_encode(['message' => 'No se encontro el libro']);
}

$stmt->close();
$conn->close();