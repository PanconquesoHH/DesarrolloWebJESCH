<?php
include 'conexion.php';


$sql = "SELECT id, correo, nombrecompleto, nivel FROM usuarios";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "<table><tr><th>Correos</th><th>Nombre Completo</th><th>Nivel</th><th>Operación</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["correo"] . "</td><td>" . $row["nombrecompleto"] . "</td><td>" . ($row["nivel"] == 1 ? "Usuario" : "Administrador") . "</td><td><button onclick='cambiarNivel(" . $row["id"] . ", " . $row["nivel"] . ")'>Cambiar a " . ($row["nivel"] == 1 ? "Administrador" : "Usuario") . "</button></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>