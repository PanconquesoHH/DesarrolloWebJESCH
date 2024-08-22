<?php

$arreglo = [2, 3, 45, 32, 2, 1, 63, 21, 52, 242, 22, 1];


$longitud = count($arreglo);


for ($i = 0; $i < $longitud - 1; $i++) {
    for ($j = 0; $j < $longitud - 1 - $i; $j++) {
        if ($arreglo[$j] > $arreglo[$j + 1]) {
            $temporal = $arreglo[$j];
            $arreglo[$j] = $arreglo[$j + 1];
            $arreglo[$j + 1] = $temporal;
        }
    }
}

echo "Arreglo ordenado:\n";
print_r($arreglo);
?>
