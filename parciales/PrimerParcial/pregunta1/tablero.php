<?php
$numeroFilas = $_POST['numeroFilas'];
$numeroColumnas = $_POST['numeroColumnas'];
$filaImagen = $_POST['fila'];
$columnaImagen = $_POST['columna'];
$colorCasilla = $_POST['color'];

echo "<table border='1'>";
for ($fila = 1; $fila <= $numeroFilas; $fila++) {
    echo "<tr>";
    for ($columna = 1; $columna <= $numeroColumnas; $columna++) {
        if ($fila == $filaImagen && $columna == $columnaImagen) {
            echo "<td style='background-color: $colorCasilla; height: 100px; width: 100px;'>";  
            echo "<img src='images/Bowser.png' width='100'>";
        } else {
            $color = (($fila + $columna) % 2 == 0) ? '#FFFFFF' : '#C60000';  
            echo "<td style='background-color: $color; height: 100px; width: 100px;'>"; 
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>;
    