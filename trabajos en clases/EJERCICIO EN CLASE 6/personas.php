<?php
include("conexion.php");

$ordenar = isset($_GET['ordenar']) ? $_GET['ordenar'] : 'id';
$filtro = isset($_GET['filtro']) ? $_GET['filtro'] : '';

$sql = "SELECT p.fotografia, p.id, nombres, apellidos, edad, sexo, o.nombre as ocupacion 
        FROM personas p
        LEFT JOIN ocupaciones o on p.ocupacion_id = o.id";

if (!empty($filtro)) {
    $sql .= " WHERE nombres LIKE '%$filtro%' OR apellidos LIKE '%$filtro%'";
}

$sql .= " ORDER BY $ordenar ASC";

$result = $con->query($sql);
$datos = array();

if($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $datos[] = $row;
    }
}

echo json_encode($datos);
?>
