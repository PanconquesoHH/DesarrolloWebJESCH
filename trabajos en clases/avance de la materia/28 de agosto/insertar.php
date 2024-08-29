<?php
include('pila.php');

$p= new Pila();

$p->Insertar ($_GET['insertar']);
?>
<meta http-equiv="refresh" content="3; url=menupila.html">