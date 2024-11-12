<?php

include 'conexion.php';


if (isset($_GET['departamento_id'])) {
    $departamento_id = $_GET['departamento_id'];

    $query = "SELECT id, nombre FROM provincias WHERE iddepartamento = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $departamento_id);
    $stmt->execute();
    $result = $stmt->get_result();


    $provincias = array();

  
    while ($row = $result->fetch_assoc()) {
        $provincias[] = $row;
    }


    echo json_encode($provincias);
} else {
    echo json_encode([]);
}

// Cerrar la conexión
$conn->close();
?>
