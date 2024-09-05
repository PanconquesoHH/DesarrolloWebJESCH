<?php
include 'conexion.php';


$stmt = $con->prepare("INSERT INTO usuarios (email, password, nivel) VALUES (?, ?, ?)");
$stmt->bind_param("ssi", $email, $hashed_password, $nivel);


$email = $_POST['email'];
$password = $_POST['password'];
$nivel = $_POST['nivel'];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

if ($stmt->execute()) {
    echo "<h1>Usuario registrado correctamente</h1>";
    echo '<meta http-equiv="refresh" content="3; url=read_users.php">';
} else {
    echo "Error al registrar el usuario";
}

$stmt->close();
$con->close();
?>
