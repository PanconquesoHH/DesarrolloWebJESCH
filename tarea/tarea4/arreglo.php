<?php

$arreglo=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
$array1=[];
$array2=[];

foreach ($arreglo as $key) {
    // echo "".$key."";
    if ($key%2==0) {
        $array1[]=$key; 
    } 
    else{
        $array2[]=$key;
    }
}
echo 'Array de pares';
foreach ($array1 as $num) {
    echo $num;
}
echo"<br>";
echo 'Array de impares';
foreach ($array2 as $num2) {
    echo $num2;
}


?>
