
<?php
include("conexion.php");

for ($i = 0; $i < 4; $i++) {
    $nombre = $_POST["nombres_$i"];
    $apellido = $_POST["apellidos_$i"];
    $cu = $_POST["cu_$i"];
    $sexo = $_POST["sexo_$i"];
    $carrera = $_POST["codigocarrera_$i"];

    $imagen = $_FILES["fotografia_$i"]["name"];
    $temp = $_FILES["fotografia_$i"]["tmp_name"];
    $arreglo = explode(".", $imagen);
    $extension=$arreglo[1];
    $nuevonombre=uniqid().".".$extension;
    copy ($temp,"imagenes/".$nuevonombre);

    $sql =  "INSERT INTO alumnos(fotografia, nombres, apellidos, cu, sexo, codigocarrera) 
    VALUES ('$nuevonombre','$nombre','$apellido', '$cu', '$sexo', '$carrera')";

    $resultado = $conexion->query($sql);
    if (!$resultado) {
        die("Error al insertar datos: " . $con->error);
    }
}
?>
<div>Se insertaron los datos con éxito</div>
<meta http-equiv="refresh" content="3;url=reed.php">