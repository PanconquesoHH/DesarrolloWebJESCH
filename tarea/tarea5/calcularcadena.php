<?php
include 'OperacionesCadena.php';

 {
    $cadena = $_POST['cadena'];

    $operacion = new OperacionesCadena($cadena);

    echo "<h1>Resultados</h1>";
    echo "<p>Cadena invertida: " . $operacion->invertir() . "</p>";
    echo "<p>Cadena en mayúsculas: " . $operacion->mayuscula() . "</p>";
    echo "<p>Cadena en minúsculas: " . $operacion->minuscula() . "</p>";
}
?>;
