<?php
$con = new mysqli("localhost","root","","tabla personas");
if ($con->connect_error) 
die("conexion fallida". $con->connect_error);
?>