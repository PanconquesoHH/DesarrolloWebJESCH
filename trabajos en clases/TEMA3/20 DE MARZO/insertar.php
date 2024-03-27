<?php
include("conexion.php");

$Nombres = $_POST["nombres"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$sexo = $_POST["sexo"];
$ocupacion = $_POST["ocupacion"];

$sql = "INSERT INTO personas( nombres, apellido, edad, sexo, ocupacion) VALUES( '$Nombres', '$apellido','$edad','$sexo','$ocupacion')";
$result = $con->query($sql);


?>