<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Editar personas
        <?php $id=$_GET['id']; 
        include ('conexion.php');
        $sql="SELECT id,nombres,apellidos,edad,sexo,ocupacion FROM personas WHERE  id= " .$id;
        $result = $con->query($sql);
        $datos = $result->fetch_assoc();
        ?>
    </h1>
    <form action="insertar.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text"name="nombres" value="<?php echo $datos ['nombres']; ?> ">
        <br>
        <label for="apellido">apellido:</label>
        <input type="text"name="apellido">
        <br>
        <label for="edad">edad:</label>
        <input type="number"name="edad">
        <br>
        <label for="sexo">sexo:</label>
        <input type="radio"name="sexo" value="M">Masculino
        <input type="radio"name="sexo" value="F">Femenino
        <br>
        <label for="ocupacion">ocupacion:</label>
        <input type="text"name="ocupacion">
        <br>
        <input type="submit" value="Insertar">
        
    </form>
    
</body>
</html>