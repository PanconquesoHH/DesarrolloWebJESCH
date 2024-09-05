<?php
include 'conexion.php';

$id = $_GET['id'];


$stmt = $con->prepare("DELETE FROM usuarios WHERE id=?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "<h2>Usuario eliminado correctamente</h2>";
    echo '<meta http-equiv="refresh" content="3;url=read_users.php">';
} else {
    echo "Error al eliminar el usuario";
}

$stmt->close();
$con->close();
?>
