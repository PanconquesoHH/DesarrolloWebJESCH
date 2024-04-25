<?php
include("conexion.php");

for ($i =0; $i< $_POST["numero"]; $i++) {
$nombres = $_POST["nombre$i"];
$apellido = $_POST["apellidos$i"];
$cu = $_POST["cu$i"];
$sexo = $_POST["sexo$i"];
$codigo_carrera = $_POST["codigo_carrera$i"];

$fotografia = $_FILES["fotografia$i"]["name"];
    $temp = $_FILES["fotografia$i"]["tmp_name"];
    $arreglo = explode(".", $fotografia);
    $extension=$arreglo[1];
    $nuevonombre=uniqid().".".$extension;
    copy ($temp,"imagenes/".$nuevonombre);


$sql= "INSERT INTO ALUMNOS (fotografia, nombres, apellidos, sexo, cu, codigo_carrera ) values ('$nuevonombre', '$nombres', '$apellido', '$sexo', '$cu', '$codigo_carrera')";
//echo $sql;
$result = $con->query($sql);  
if(!$result){
    die("Error al insertar datos: " . $con->error);
}
}
?>
<div>Se inserto con exito</div>
<meta http-equiv="refresh" content="5; url=listaalumnos.php">