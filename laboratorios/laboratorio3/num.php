<?php
include 'conexion.php';


$query = "SELECT sexo, COUNT(*) as total FROM alumnos GROUP BY sexo";
$resultado = $conexion->query($query);

$total_varones = 0;
$total_mujeres = 0;


while ($fila = $resultado->fetch_assoc()) {
    if ($fila['sexo'] === 'M') {
        $total_varones = $fila['total'];
    } elseif ($fila['sexo'] === 'F') {
        $total_mujeres = $fila['total'];
    }
}



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Total de Alumnos por Sexo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
            text-align: center;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
        img {
            width: 30px;
            height: 30px;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Total de Alumnos por Sexo</h2>
    <table>
        <tr>
            <th>Sexo</th>
            <th>Total</th>
        </tr>
        <tr>
            <td><img src="uploads/varon_icon.png" alt="Varones"> Varones</td>
            <td><?php echo $total_varones; ?></td>
        </tr>
        <tr>
            <td><img src="uploads/mujer_icon.png" alt="Mujeres"> Mujeres</td>
            <td><?php echo $total_mujeres; ?></td>
        </tr>
    </table>
</body>
</html>
