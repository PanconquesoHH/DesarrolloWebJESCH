<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include('conexion.php');


    ?>
    
    <form action="insertar.php" method="post" >
        <label for="archivo">Archivo</label>
        <input type="file" name="archivo"><br>
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo">
        <br>
        <label for="autor">Autor:</label>
        <input type="text" name="autor">
        <br>
        <label for="editorial">Editorial:</label>
        <input type="number" name="editorial">
        <br>
        <label for="anio">anio:</label>
        <input type="number" name="anio">
        
        <br>
        <input type="submit" value="Insertar">

        <label for="archivo">Archivo</label>
        <input type="file" name="archivo"><br>
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo">
        <br>
        <label for="autor">Autor:</label>
        <input type="text" name="autor">
        <br>
        <label for="editorial">Editorial:</label>
        <input type="number" name="editorial">
        <br>
        <label for="anio">anio:</label>
        <input type="number" name="anio">
        
        <br>
        <input type="submit" value="Insertar">

</body>
</html>