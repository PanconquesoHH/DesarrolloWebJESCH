<?php
include 'conexion.php';
$id = $_GET['id'];


$sql = "SELECT id, numero_mes, departamento_id, municipio_id, lugar_id, recinto_id FROM mesas WHERE id=$id";
$resultado = $con->query($sql);
$fila = $resultado->fetch_assoc();
?>
<form action="update_mesa.php" method="post">
    <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">

    <label for="numero_mes">Número de Mesa:</label>
    <input type="number" name="numero_mes" value="<?php echo $fila['numero_mes']; ?>" required><br>

    <label for="departamento_id">Departamento ID:</label>
    <input type="number" name="departamento_id" value="<?php echo $fila['departamento_id']; ?>" required><br>

    <label for="municipio_id">Municipio ID:</label>
    <input type="number" name="municipio_id" value="<?php echo $fila['municipio_id']; ?>" required><br>

    <label for="lugar_id">Lugar ID:</label>
    <input type="number" name="lugar_id" value="<?php echo $fila['lugar_id']; ?>" required><br>

    <label for="recinto_id">Recinto ID:</label>
    <input type="number" name="recinto_id" value="<?php echo $fila['recinto_id']; ?>" required><br>

    <input type="submit" value="Actualizar Mesa">
</form>
