
<?php
include("conexion.php");
$sql = "SELECT a.id,a.fotografia,nombres,apellidos,cu,sexo,c.carrera as carrera FROM alumnos a
LEFT JOIN carrera c on a.codigo_carrera=c.id";
$result = $con->query($sql);
$i=1;
if ($result->num_rows > 0) {
?>
    <table border='1'>
        <tr>
        <th>Nro</th>
            <th>Fotografia</th>
            
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>CU</th>
            <th>Sexo</th>
            <th>Ocupacion</th>
            
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><img src="imagenes/<?php echo $row["fotografia"]; ?>" width="40" height="40"></td>
                <td><?php echo $row["nombres"]; ?></td>
                <td><?php echo $row["apellidos"]; ?></td>
                <td><?php echo $row["cu"]; ?></td>
                <td><?php echo $row["sexo"]; ?></td>
                <td><?php echo $row["carrera"]; ?></td>
                
            </td>
            </tr>
        <?php } ?>

    </table>
<?php
} else {
    echo "0 resultados";
}
mysqli_close($con);
?>   

<style>
    table {
        border-collapse: collapse;
    }

    th {
        background-color: lightslategray;
        border: 1px solid black;
        width: 100px;
    }

</style>