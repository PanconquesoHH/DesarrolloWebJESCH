<?php
include 'conexion.php';


$sql = "SELECT id, numero_mes, departamento_id, municipio_id, lugar_id, recinto_id FROM mesas";
$resultado = $con->query($sql);
?>
<table>
    <tr>
        <th>Número de Mesa</th>
        <th>Departamento ID</th>
        <th>Municipio ID</th>
        <th>Lugar ID</th>
        <th>Recinto ID</th>
        <th>Operaciones</th>
    </tr>
    <?php while ($fila = $resultado->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $fila['numero_mes']; ?></td>
        <td><?php echo $fila['departamento_id']; ?></td>
        <td><?php echo $fila['municipio_id']; ?></td>
        <td><?php echo $fila['lugar_id']; ?></td>
        <td><?php echo $fila['recinto_id']; ?></td>
        <td>
            <a href="form_update_mesa.php?id=<?php echo $fila['id']; ?>">Editar</a>
            <a href="delete_mesa.php?id=<?php echo $fila['id']; ?>">Eliminar</a>
        </td>
    </tr>
    <?php } ?>
</table>

<a href="form_create_mesa.html">Registrar nueva mesa</a>
