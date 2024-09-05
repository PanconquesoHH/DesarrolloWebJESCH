<?php
include 'conexion.php';

$sql = "SELECT id, email, nivel FROM usuarios";
$resultado = $con->query($sql);
?>
<table>
    <tr>
        <th>Email</th>
        <th>Nivel</th>
        <th>Operaciones</th>
    </tr>
    <?php while ($fila = $resultado->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $fila['email']; ?></td>
        <td><?php echo $fila['nivel']; ?></td>
        <td>
            <a href="form_update_user.php?id=<?php echo $fila['id']; ?>">Editar</a>
            <a href="delete_user.php?id=<?php echo $fila['id']; ?>">Eliminar</a>
        </td>
    </tr>
    <?php } ?>
</table>

<a href="form_create_user.html">Registrar nuevo usuario</a>
