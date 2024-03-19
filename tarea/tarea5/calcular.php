<?php
require_once "operacionescadena.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["cadena"])) {
    $cadena = $_POST["cadena"];
    $operacion = new operacionescadena($cadena);

    echo "<p>Cadena original: " . htmlspecialchars($cadena) . "</p>";
    echo "<p>Cadena invertida: " . $operacion->invertir() . "</p>";
    echo "<p>Cadena en mayúsculas: " . $operacion->mayuscula() . "</p>";
    echo "<p>Cadena en minúsculas: " . $operacion->minuscula() . "</p>";
} else {
    echo "Por favor, introduzca una cadena.";
}
?>
