<?php
include 'conexion.php';

$id = $_GET['id'];

$sql = "DELETE FROM libros WHERE id=$id";
if ($con->query($sql) === TRUE) {
    echo "Libro eliminado correctamente";
} 

?>
