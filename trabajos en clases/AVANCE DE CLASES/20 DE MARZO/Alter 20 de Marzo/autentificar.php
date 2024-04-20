<?php session_start();
$correo = $_POST["correo"];
$password = $_POST["password"];
include("conexion.php");
$sql="SELECT correo,nivel from usuarios where correo='$correo'
and password=sha1('$password')";

$result = $con->query($sql);
$i=1;
if ($result->num_rows > 0) {
    echo"Bienvenido";
} else 
{?>
ERROR USUARIO O CONTRASENA INVALIDO
<meta>https-equiv
<?php
}

?>