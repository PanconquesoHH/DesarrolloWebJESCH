<?php
include 'conexion.php';
$estudiantes = $_POST['estudiantes'];

foreach ($estudiantes as $estudiante) {
    $nombres = $estudiante['nombres'];
    $apellidos = $estudiante['apellidos'];
    $cu = $estudiante['correo'];

    $sql = "INSERT INTO usuarios (nombres, apellidos, correo) VALUES ('$nombres', '$apellidos', '$correo')";
    $con->query($sql);
}

header('Location: read.php');
