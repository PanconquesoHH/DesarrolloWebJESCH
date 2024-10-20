<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Alumnos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Insertar Alumnos</h2>
    <form method="post" enctype="multipart/form-data" action="Fdatos4.php">
        <table>
            <tr>
                <th>Alumno</th>
                <th>Fotografía</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>CU</th>
                <th>Sexo</th>
                <th>Código Carrera</th>
            </tr>
            <?php for ($i = 0; $i < 4; $i++): ?>
                <tr>
                    <td>Alumno <?php echo $i + 1; ?></td>
                    <td>
                        <input type="file" name="fotografia_<?php echo $i; ?>" accept="image/*">
                    </td>
                    <td>
                        <input type="text" name="nombres_<?php echo $i; ?>">
                    </td>
                    <td>
                        <input type="text" name="apellidos_<?php echo $i; ?>">
                    </td>
                    <td>
                        <input type="text" name="cu_<?php echo $i; ?>">
                    </td>
                    <td>
                        <input type="radio" name="sexo_<?php echo $i; ?>" value="M"> Masculino
                        <input type="radio" name="sexo_<?php echo $i; ?>" value="F"> Femenino
                    </td>
                    <td>
                        <select name="codigocarrera_<?php echo $i; ?>">
                            <option value="">Seleccionar carrera</option>
                            <?php
                          
                            include 'conexion.php';
                            $carreras = $conexion->query("SELECT codigo, carrera FROM carreras");
                            while ($row = $carreras->fetch_assoc()): ?>
                                <option value="<?php echo $row['codigo']; ?>">
                                    <?php echo $row['carrera']; ?>
                                </option>
                            <?php endwhile; ?>
                        </select>
                    </td>
                </tr>
            <?php endfor; ?>
        </table>
        <button type="submit" name="insertar">Insertar</button>
        <button type="submit" name="borrar">Borrar</button>
    </form>
</body>
</html>
