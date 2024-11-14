<?php
include 'conexion.php';

$bandeja = $_GET['bandeja'];
$sql = "SELECT id, correo, asunto, estado FROM correos WHERE bandeja = ?";
$stmt = mysqli_prepare($conexion, $sql);
mysqli_stmt_bind_param($stmt, "s", $bandeja);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

echo "<table class='bandeja'><tr><th>Correo</th><th>Asunto</th><th>Estado</th><th>Operación</th></tr>";
$row_class = "row-azul";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr class='$row_class'>
            <td>{$row['correo']}</td>
            <td>{$row['asunto']}</td>
            <td>{$row['estado']}</td>
            <td><button class='ver-btn' onclick='verCorreo({$row['id']})'>Ver</button></td>
          </tr>";
   
    $row_class = ($row_class === "row-azul") ? "row-blanco" : "row-azul";
}
echo "</table>";

mysqli_stmt_close($stmt);
mysqli_close($conexion);
?>
