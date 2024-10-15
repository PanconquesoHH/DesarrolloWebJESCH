<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Introducir Datos</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <form action="guardar_datos.php" method="POST">
        <div style="border: 1px,black solid;width: 250px;margin:auto">
        <label>a= </label><input style="border:solid blue 2px" type="number" name="a" required><br><br>
        <label>b= </label><input style="border:solid blue 2px" type="number" name="b" required><br><br>
        <label>c= </label><input style="border:solid blue 2px" type="number" name="c" required><br><br>
        <input style="background-color:lightblue; padding:2px;width:80px;border:solid black 2px" type="submit" value="Menu">
        </div>
    </form>
</body>
</html>



