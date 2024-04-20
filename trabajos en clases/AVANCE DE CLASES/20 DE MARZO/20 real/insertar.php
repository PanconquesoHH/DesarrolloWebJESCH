<?php
include("conexion.php");

$Nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$sexo = $_POST["sexo"];
$ocupacion = $_POST["ocupacion"];

$sql = "INSERT INTO personas( nombre, apellido, edad, sexo, ocupacion) VALUES( '$Nombre', '$apellido','$edad','$sexo','$ocupacion')";
$result = $con->query($sql);
echo"La persona " .$Nombre. " fue anadido exisotosamente";


?>
<meta http-equiv="refreh"content="3;url=read.php">