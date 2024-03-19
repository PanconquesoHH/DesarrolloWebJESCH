<?php
include('cola.php');
session_start();
if (!isset($_SESSION['c'])) {
    $_SESSION['c'] = new cola();
}
$valor = $_GET['valor'];
$_SESSION['c']->insertar($valor);
?>
<meta http-equiv="refresh" content="4;url=menu_pila.html">