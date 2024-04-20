<?php
session_start();

if (($_GET['numero'])) {
    $n = ($_GET['numero']); 

   
    $_SESSION['n'] = $n;

  
    $vector1 = array();
    $vector2 = array();

    for ($i = 0; $i < $n; $i++) {
        $vector1[$i] = rand(1, 10); 
        $vector2[$i] = rand(1, 10); 
    }

 
    $resultado = 0;
    for ($i = 0; $i < $n; $i++) {
        $resultado += $vector1[$i] * $vector2[$i];
    }

    
    echo "<h2>Vector 1:</h2>";
    echo "[" . join(", ", $vector1) . "]<br>";
    echo "<h2>Vector 2:</h2>";
    echo "[" . join(", ", $vector2) . "]<br>";
    echo "<h2>Resultado de la multiplicación:</h2>";
    echo "El resultado es: $resultado";
} else {
    echo "<p>No se recibió el valor de n.</p>";
}
?>
