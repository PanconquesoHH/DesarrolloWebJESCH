<?php
$num = $_GET['num'];
include 'conexion.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .row {
            display: flex;
            gap: 10px;
        }
    </style>
</head>

<body>
    <form class="formularios" method="POST" action="crear.php">
        <table>
            <tr>
                <th></th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>CU</th>
                <th>Sexo</th>
                <th>Carrera</th>
            </tr>
            <?php for ($i = 0; $i < $num; $i++) { ?>
                <tr>
                    <td>
                        <?php echo $i + 1 ?>
                    </td>
                    <td>
                        <input type="text" name="estudiantes[<?php echo $i ?>][nombres]">
                    </td>
                    <td>
                        <input type="text" name="estudiantes[<?php echo $i ?>][apellidos]">
                    </td>
                    <td>
                        <input type="text" name="estudiantes[<?php echo $i ?>][cu]">
                    </td>
                    <td>
                        <div class="row">
                            <input type="radio" name="estudiantes[<?php echo $i ?>][sexo]" value="M">
                            <div>Masculino</div>
                            <input type="radio" name="estudiantes[<?php echo $i ?>][sexo]" value="F">
                            <div>Femenino</div>
                        </div>
                    </td>
                    <td>
                        <select name="estudiantes[<?php echo $i ?>][carrera]">
                            <?php
                            $sql = "SELECT * FROM carreras";
                            $res = $con->query($sql);
                            while ($carrera = $res->fetch_assoc()) { ?>
                                <option value="<?php echo $carrera['id'] ?>"><?php echo $carrera['nombre'] ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <button type="submit">Guardar</button>
    </form>
</body>

</html>