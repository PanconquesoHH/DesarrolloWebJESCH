<?php
include 'conexion.php';

$id = $_GET['id'];

$stmt = $con->prepare("DELETE FROM mesas WHERE id=?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "<h2>Mesa eliminada correctamente</h2>";
    echo '<meta http-equiv="refresh" content="3;url=read_mesas.php">';
} else {
    echo "Error al eliminar la mesa";
}

$stmt->close();
$con->close();
?>
