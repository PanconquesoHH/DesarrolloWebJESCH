<?php
include('conexion.php');
$id=$_GET['id'];
$sql="DELETE FROM libros WHERE id=$id";
if ($con->query($sql) === TRUE) {
    echo "Se elimino el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close();
?>