<?php
$con = new mysqli("localhost","root","","bd_tecnologia");
if ($con->connect_error)
die("Conexion fallida".$con->connect_error)
?>