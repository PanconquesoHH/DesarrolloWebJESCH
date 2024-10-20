<?php
include 'conexion.php';
$sql = "SELECT E.nombres, E.apellidos, E.cu, E.sexo, C.nombre as carrera FROM estudiantes E 
INNER JOIN carreras C ON E.id_carrera = C.id";
$resultado = $con->query($sql);
?>
<table border="1">
    <tr>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>CU</th>
        <th>Sexo</th>
        <th>Carrera</th>
    </tr>
    <?php while ($mesa = $resultado->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $mesa['nombres']; ?></td>
            <td><?php echo $mesa['apellidos']; ?></td>
            <td><?php echo $mesa['cu'] ?></td>
            <td><?php echo $mesa['sexo'] == "M" ? "Masculino" : "Femenino" ?></td>
            <td><?php echo $mesa['carrera'] ?></td>
        </tr>
    <?php } ?>
</table>