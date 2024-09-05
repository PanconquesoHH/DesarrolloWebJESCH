<?php
include 'conexion.php';

$id = $_POST['id'];
$email = $_POST['email'];
$nivel = $_POST['nivel'];


$stmt = $con->prepare("UPDATE usuarios SET email=?, nivel=? WHERE id=?");
$stmt->bind_param("sii", $email, $nivel, $id);

if ($stmt->execute()) {
    echo "<h2>Usuario actualizado correctamente</h2>";
    echo '<meta http-equiv="refresh" content="3; url=read_users.php">';
} else {
    echo "Error al actualizar el usuario";
}

$stmt->close();
$con->close();
?>
