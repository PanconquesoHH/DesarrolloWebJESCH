<?php
include('conexion.php');

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editorial = $_POST['editorial'];
$anio = $_POST['anio'];

$sql = "INSERT INTO libros (titulo, autor, idEditorial, anio) VALUES ('$titulo', '$autor', '$editorial', $anio)";
$result = $con->query($sql);  
if(!$result){
    die("Error al insertar datos: " . $con->error);
}
?>
<div>Se Edito con exito</div>
