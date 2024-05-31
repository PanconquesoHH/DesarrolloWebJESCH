<?php
$con = new mysqli("localhost", "root", "", "bs-censo");
if ($con->connect_error)
    die("conexion fallada" . $con->connect_error);
?>