<?php

include("Operacion.php");
$num1=$_GET['num1'];
$num2=$_GET['num2'];
$calcular=$_GET['Operacion'];

$o = new Operaciones($num1,$num2);
switch ($calcular) {
    case 'Suma': echo $o->sumar();
    break;
    case 'Restar': echo $o->restar();
    break;
    case 'Multiplicar': echo $o->multiplicar();
    break;
    case 'Dividir': echo $o->dividir();
}
?>