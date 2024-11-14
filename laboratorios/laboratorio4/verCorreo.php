<?php
include 'conexion.php';

if (!$conexion) {
    die("Error de conexión a la base de datos: " . mysqli_connect_error());
}


$id = $_GET['id'];
$sql = "SELECT correo, asunto, mensaje FROM correos WHERE id = ?";
$stmt = mysqli_prepare($conexion, $sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        echo "<h3>{$row['asunto']}</h3>";
        echo "<p><strong>De:</strong> {$row['correo']}</p>";
        echo "<p>{$row['mensaje']}</p>";
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Error en la preparación de la consulta: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
