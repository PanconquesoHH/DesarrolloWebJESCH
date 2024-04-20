<?php
include 'utiles.php';

if (($_GET['cadena']) && ($_GET['guiones'])) {
    $cadena = $_GET['cadena'];
    $guiones = ($_GET['guiones']);

    $utiles = new Utiles($cadena);
    $resultado = $utiles->aumentarGuiones($guiones);

    echo "<h1>Resultado</h1>";
    echo "<p>$resultado</p>";
} 
?>
