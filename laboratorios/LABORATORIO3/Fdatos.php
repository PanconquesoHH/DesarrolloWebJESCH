<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Persona</title>
</head>
<body>
<div class="container">
    <h1>Insertar Persona</h1>
    <?php  
    include('conexion.php');
    $sql = "SELECT id, carrera from carrera";
    $result = $con->query($sql);
    
    $numero = $_POST['num_alumnos'];
   
    ?>

    <form action="agregar.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="numero" value="<?php echo $numero; ?>">
        <?php 
        for ($i = 0; $i < $numero; $i++): ?>
            <label for="fotografia">Fotografía:</label>
            <input type="file" name="fotografia<?php echo $i; ?>" >

            
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre<?php echo $i; ?>">
            
            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos<?php echo $i; ?>">
            
            <label for="cu">CU:</label>
            <input type="text" name="cu<?php echo $i; ?>">
            
            <label for="sexo">Sexo:</label>
            <input type="radio" name="sexo<?php echo $i; ?>" value="M"> Masculino
            <input type="radio" name="sexo<?php echo $i; ?>" value="F"> Femenino
            
            <label for="carrera">Carrera:</label>
            <select name="codigo_carrera<?php echo $i; ?>">

                <?php $result = $con->query($sql);
                 while ($carrera = $result->fetch_assoc()) { ?>
                    <option value="<?php echo $carrera['id']; ?>"><?php echo $carrera['carrera']; ?></option>
                <?php } ?>
            </select>
            <br>
        <?php endfor; ?>
        <input type="submit" value="Insertar">
        <input type="reset" value="Borrar">
    </form>
</div>

<style>
    .container {
        width: 90%;
        margin: auto;
        border: 1px solid black;
    }
</style>
</body>
</html>
