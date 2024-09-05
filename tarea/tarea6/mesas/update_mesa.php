<?php
include 'conexion.php';

$id = $_POST['id'];
$numero_mes = $_POST['numero_mes'];
$departamento_id = $_POST['departamento_id'];
$municipio_id = $_POST['municipio_id'];
$lugar_id = $_POST['lugar_id'];
$recinto_id = $_POST['recinto_id'];

$stmt = $con->prepare("UPDATE mesas SET numero_mes=?, departamento_id=?, municipio_id=?, lugar_id=?, recinto_id=? WHERE id=?");
$stmt->bind_param("iiiiii", $numero_mes, $departamento_id, $municipio_id, $lugar_id, $recinto_id, $id);

if ($stmt->execute()) {
    echo "<h2>Mesa actualizada correctamente</h2>";
    echo '<meta http-equiv="refresh" content="3; url=read_mesas.php">';
} else {
    echo "Error al actualizar la mesa";
}

$stmt->close();
$con->close();
?>
