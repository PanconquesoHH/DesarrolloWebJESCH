<?php
include 'conexion.php';
$estudiantes = $_POST['estudiantes'];

foreach ($estudiantes as $estudiante) {
    $nombres = $estudiante['nombres'];
    $apellidos = $estudiante['apellidos'];
    $cu = $estudiante['cu'];
    $sexo = $estudiante['sexo'];
    $carrera = $estudiante['carrera'];

    $sql = "INSERT INTO estudiantes (nombres, apellidos, cu, sexo, id_carrera) VALUES ('$nombres', '$apellidos', '$cu', '$sexo', $carrera)";
    $con->query($sql);
}

header('Location: read.php');