<?php
$numero= $_POST['numero'];
$suma=0;
for ($i= 0; $i<$numero; $i++) {
    $suma += $suma+$_POST['valor'.$i];

 
}
echo "El valor de la suma es $suma";

