<?php
include('cola.php');
session_start();
if (!isset($_SESSION['c'])) {
    echo "error no hay elementos";
} else {
    
    if (isset($_POST['valor'])) {
        $valor = $_POST['valor'];
        $valorEliminado = $_SESSION['c']->eliminar($valor);
        echo "El valor eliminado es " . $valorEliminado;
    } else {
        echo "No se proporcionó un valor para eliminar.";
    }
}
?>
<meta http-equiv="refresh" content="4;url=menucola.html">