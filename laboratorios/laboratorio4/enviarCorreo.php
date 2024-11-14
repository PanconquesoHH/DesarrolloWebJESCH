<?php
include 'conexion.php';

$data = json_decode(file_get_contents("php://input"));
$correo = $data->correo;
$asunto = $data->asunto;
$mensaje = $data->mensaje;

$sql = "INSERT INTO correos (bandeja, correo, asunto, mensaje, estado) VALUES ('salida', ?, ?, ?, 'P')";
$stmt = mysqli_prepare($conexion, $sql);
mysqli_stmt_bind_param($stmt, "sss", $correo, $asunto, $mensaje);
mysqli_stmt_execute($stmt);

mysqli_stmt_close($stmt);
mysqli_close($conexion);
?>
