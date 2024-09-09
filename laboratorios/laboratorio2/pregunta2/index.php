<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Introducir Datos</title>
</head>
<body>
    <h2>Introducir Valores</h2>
    <form action="guardar_datos.php" method="POST">
        <label>Valor A: </label><input type="number" name="a" required><br><br>
        <label>Valor B: </label><input type="number" name="b" required><br><br>
        <label>Valor C: </label><input type="number" name="c" required><br><br>
        <input type="submit" value="Guardar Datos">
    </form>
    <?php
    if (isset($_SESSION['a']) && isset($_SESSION['b']) && isset($_SESSION['c'])) {
        echo "<br><a href='mostrar_calculos.php'>Mostrar Cálculos</a>";
    }
    ?>
</body>
</html>
