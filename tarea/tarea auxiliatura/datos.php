<?php
include('conexion.php');

if (isset($_POST['texto'])) {
    $texto = $_POST['texto'];
    error_log("Texto recibido: " . $texto); 

    $sql = $con->prepare("SELECT id, nombre_carrera FROM carrera WHERE nombre_carrera LIKE ?");
    $search = "%$texto%";
    $sql->bind_param("s", $search);
    $sql->execute();
    $resultado = $sql->get_result();

    $datos = array();

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            $datos[] = $row;
        }
    }

    echo json_encode($datos);
} else {
    echo json_encode([]);
}
?>
