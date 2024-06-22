<?php

$titulo = $_POST["titulolibro"];
$autor = $_POST["autor"];
$id_editorial = $_POST["id_edi"];
$anio = $_POST["anio"];
$id_user = $_POST["id_user"];
$id_carrera = $_POST["id_carrera"];

$id = $_POST["id"];

$fotografia = null;
if (isset($_FILES['archivo'])) {
    $archivo_original = $_FILES['archivo']['name'];
    $arreglo = explode(".", $archivo_original);
    $extension = $arreglo[1];
    $fotografia = uniqid() . '.' . $extension;
}
include('conexion.php');

copy($_FILES['archivo']['tmp_name'],'images/'.$fotografia);


$sql = "UPDATE libros SET imagen='$fotografia',titulo='$titulo',autor='$autor',ideditorial=$id_editorial,
        anio=$anio,idusuario=$id_user,idcarrera=$id_carrera WHERE id=$id";

if ($con->query($sql) === TRUE)#solo true si la ocnsulta se ejcuta sin errores
{
    echo 'Se actualizo el registro correctamente';
} 
else 
{
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>