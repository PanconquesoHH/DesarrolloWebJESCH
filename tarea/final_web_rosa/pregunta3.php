<?php
session_start();
include('ListaAlumnos.php');
// matar sesion
//session_destroy();
  
$listaAlumnos = new ListaAlumnos();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['eliminar']) and isset($_POST['CU'])) {
        // Eliminar último alumno
        $listaAlumnos->eliminarAlumno($_POST['CU']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alumnos</title>
    <style>
        table {
            width: auto;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        #content_p3 {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div id="content_p3">
        <h1>Lista de Alumnos</h1>
        <?php $listaAlumnos->mostrarLista(); ?>
        <button onclick="mostrarFormInsert()">Insertar</button>
    </div>
</body>
</html>
