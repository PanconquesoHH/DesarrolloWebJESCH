<?php
include('cola.php');
session_start();
if (!isset($_SESSION['c'])) {
    echo "error no hay elementos";
} else {

    $valor = $_SESSION['c']->mostrar();
}
?>
<meta http-equiv="refresh" content="4;url=menucola.html">