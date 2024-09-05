<?php
include 'conexion.php';

$stmt = $con->prepare("INSERT INTO mesas (numero_mes, departamento_id, municipio_id, lugar_id, recinto_id) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("iiiii", $numero_mes, $departamento_id, $municipio_id, $lugar_id, $recinto_id);

$numero_mes = $_POST['numero_mes'];
$departamento_id = $_POST['departamento_id'];
$municipio_id = $_POST['municipio_id'];
$lugar_id = $_POST['lugar_id'];
$recinto_id = $_POST['recinto_id'];


if ($stmt->execute()) {
    echo "<h1>Mesa registrada correctamente</h1>";
    echo '<meta http-equiv="refresh" content="3; url=read_mesas.php">';
} else {
    echo "Error al registrar la mesa";
}

$stmt->close();
$con->close();
?>
