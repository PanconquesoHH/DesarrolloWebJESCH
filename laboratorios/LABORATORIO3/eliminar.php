<?php
include("conexion.php");

$id=$_GET['id'];

$sql= "DELETE FROM  ALUMNOS where id=$id";
//echo $sql;
$result = $con->query($sql);  
if(!$result){
    die("Error al eliminar datos: " . $con->error);
}
?>
<div>Se elimino con exito</div>
<meta http-equiv="refresh" content="5; url=read.php">