<?php
include("conexion.php");
if (isset($_GET['ordenar']))
{
    $ordenar=$_GET['ordenar'];
}
else
{
    $ordenar="id";
}
if (isset($_GET['filtro']))
{
    $filtro=$_GET['filtro'];
    $sql = "SELECT p.fotografia,p.id,nombres,apellidos,edad,sexo,o.nombre as ocupacion FROM personas p
    LEFT JOIN ocupaciones o on p.ocupacion_id=o.id where nombres like '%$filtro%' or apellidos like '%$filtro%' order by $ordenar asc";
}
else
{
    $sql = "SELECT p.fotografia,p.id,nombres,apellidos,edad,sexo,o.nombre as ocupacion FROM personas p
    LEFT JOIN ocupaciones o on p.ocupacion_id=o.id order by $ordenar asc";
}
$result = $con->query($sql);
$i = 1;
if ($result->num_rows > 0) {
?>
    <table border='1'>
       
        <?php
        while ($row = $result->fetch_assoc()) {
        ?>
            
        <?php } ?>
    </table>
<?php
} else {
    echo "0 resultados";
}
mysqli_close($con);
?>
