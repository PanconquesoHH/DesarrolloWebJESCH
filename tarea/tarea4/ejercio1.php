<?php
$numeros = range(1, 20);
$pares = array();
$impares = array();
foreach ($numeros as $numero) {
    if ($numero % 2 == 0) {
        $pares[] = $numero; 
    } else {
        $impares[] = $numero; 
    }
}

echo "Números Pares:\n";
print_r($pares);

echo "Números Impares:\n";
print_r($impares);
?>
