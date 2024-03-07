<?php
$cadena=$_GET('cadena');
$arreglo=explode('',$cadena);
$ps=0;
$mayor= "";
foreach($arreglo as $indice=>$value)
{
 if(strlen($valor)> $mayor)
 {
    $ps=$indice;
    $mayor=strlen($valor);
 }
}

echo "la palabras mas larga es".$arreglo($ps);
?>