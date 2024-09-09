<?php

$filas = $_POST['filas'];
$columnas = $_POST['columnas'];
echo "<table border='1'>";
for ($i = $filas; $i >= 1; $i--) {
    echo "<tr>";
    for ($j = $columnas; $j >= 1; $j--) {
        
        $resultado = $i * $j;
        echo "<td>$resultado</td>";
    }

    
    echo "<td><b style='background-color:red;'>$i</b></td>";
    
    echo "</tr>";
}

echo "<tr>";
for ($j = $columnas; $j >= 1; $j--) {
    echo "<td><b style='background-color:red;'>$j</b></td>";
}
echo "<td></td>"; 
echo "</tr>";

echo "</table>";
?>;
