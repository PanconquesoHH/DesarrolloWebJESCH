<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['insertar'])) {
        for ($i = 0; $i < 4; $i++) {
            $fotografia = $_FILES["fotografia_$i"]["name"];
            $nombres = $_POST["nombres_$i"];
            $apellidos = $_POST["apellidos_$i"];
            $cu = $_POST["cu_$i"];
            $sexo = $_POST["sexo_$i"];
            $codigocarrera = $_POST["codigocarrera_$i"];

           
            $ruta = "uploads/" . basename($fotografia);

            
            if (move_uploaded_file($_FILES["fotografia_$i"]["tmp_name"], $ruta)) {
             
                $sql = "INSERT INTO alumnos (fotografia, nombres, apellidos, cu, sexo, codigocarrera) 
                        VALUES ('$fotografia', '$nombres', '$apellidos', '$cu', '$sexo', $codigocarrera)";

                if (!$conexion->query($sql)) {
                    echo "Error al insertar el registro para el alumno " . ($i + 1) . ": " . $conexion->error . "<br>";
                }
            } else {
                echo "Error al mover el archivo para el alumno " . ($i + 1) . "<br>";
            }
        }
        echo "Registros insertados exitosamente.";
    }
}

?>
