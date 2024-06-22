<?php
include('conexion.php');
$id=$_GET['id'];
$sql="SELECT * FROM libros WHERE id=$id";
$resultado = $con->query($sql);
$row = $resultado->fetch_assoc();
?>
<form action="javascript:updateLibro()" method="POST" enctype="multipart/form-data" id="form_libro">
        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
        Imagen:<input type="file" src="images/<?php echo $row['imagen']; ?>" name="archivo"><br>
        Titulo: <input type="text" name="titulolibro" id="titulolibro" value="<?php echo $row['titulo']; ?>"><br>
        Autor: <input type="text" name="autor" id="autor" value="<?php echo $row['autor']; ?>"><br>
        ID Editorial <input type="number" name="id_edi" id="id_edi" value="<?php echo $row['ideditorial']; ?>"><br>
        Año: <input type="number" name="anio" id="anio" value="<?php echo $row['anio']; ?>"><br>
        ID Usuario: <input type="number" name="id_user" id="is_user" value="<?php echo $row['idusuario']; ?>"><br>
        ID Carrera: <input type="number" name="id_carrera" id="id_carrera" value="<?php echo $row['idcarrera']; ?>"><br>
        <input type="submit" value="Actualizar">
</form>