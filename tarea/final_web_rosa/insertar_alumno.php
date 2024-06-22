<?php
session_start();
include('ListaAlumnos.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['CU']) && isset($_POST['nombres']) && isset($_POST['apellidos'])) {
        $CU = $_POST['CU'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];

        // Lógica para insertar alumno
        $alumno = new Alumno($CU, $nombres, $apellidos);
        $_SESSION['lista_alumnos'][] = $alumno;
        // redireccionar a index.php
        header('Location: index.php');
    }
}
?>
