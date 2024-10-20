<?php
include 'conexion.php';


$order_by = isset($_GET['orden']) ? $_GET['orden'] : 'nombres';

$sql = "SELECT a.fotografia, a.nombres, a.apellidos, a.cu, a.sexo, c.carrera 
        FROM alumnos a 
        INNER JOIN carreras c ON a.codigocarrera = c.codigo 
        ORDER BY $order_by";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Alumnos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: blue;
            color: white;
            cursor: pointer;
        }
        tr:nth-child(even) {
            background-color: lightgray;
        }
    </style>
</head>
<body>
    <h2>Lista de Alumnos</h2>
    <table border="1">
        <thead>
            <tr>
                <th><a href="?orden=fotografia">Fotografía</a></th>
                <th><a href="?orden=nombres">Nombres</a></th>
                <th><a href="?orden=apellidos">Apellidos</a></th>
                <th><a href="?orden=cu">CU</a></th>
                <th><a href="?orden=sexo">Sexo</a></th>
                <th><a href="?orden=carrera">Carrera</a></th>
            </tr>
        </thead>
        <tbody>
            <?php if ($resultado->num_rows > 0): ?>
                <?php while ($fila = $resultado->fetch_assoc()): ?>
                    <tr>
                        <td><img src="<?php echo 'uploads/' . $fila['fotografia']; ?>" alt="Fotografía" width="100"></td>
                        <td><?php echo $fila['nombres']; ?></td>
                        <td><?php echo $fila['apellidos']; ?></td>
                        <td><?php echo $fila['cu']; ?></td>
                        <td><?php echo $fila['sexo']; ?></td>
                        <td><?php echo $fila['carrera']; ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">No hay registros.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <?php $conexion->close(); ?>
</body>
</html>
