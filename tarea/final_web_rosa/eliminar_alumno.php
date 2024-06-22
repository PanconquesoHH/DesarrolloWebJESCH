<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['CU'])) {
        $CU = $_POST['CU'];
        echo $CU;
        // Lógica para eliminar alumno
        // if (isset($_SESSION['lista_alumnos'])) {
        //     foreach ($_SESSION['lista_alumnos'] as $key => $alumno) {
        //         if ($alumno->CU == $CU) {
        //             unset($_SESSION['lista_alumnos'][$key]);
        //             break;
        //         }
        //     }
        // }
    }
}
?>
