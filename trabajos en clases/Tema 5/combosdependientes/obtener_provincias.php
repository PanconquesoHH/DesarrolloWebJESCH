<?php
// Incluir la conexión a la base de datos
include 'conexion.php';

// Verificar que el parámetro departamento_id fue enviado
if (isset($_GET['departamento_id'])) {
    $departamento_id = $_GET['departamento_id'];

    // Preparar y ejecutar la consulta para obtener las provincias
    $query = "SELECT id, nombre FROM provincias WHERE iddepartamento = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $departamento_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Crear un array para almacenar las provincias
    $provincias = array();

    // Recorrer los resultados y agregarlos al array
    while ($row = $result->fetch_assoc()) {
        $provincias[] = $row;
    }

    // Enviar los datos en formato JSON
    echo json_encode($provincias);
} else {
    echo json_encode([]);
}

// Cerrar la conexión
$conn->close();
?>
