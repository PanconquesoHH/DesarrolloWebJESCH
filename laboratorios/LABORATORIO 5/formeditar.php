<?php 
    $id=$_GET["id"];
    include("conexion.php");

    $sql = "SELECT id, titulo, autor, ideditorial , anio FROM libros WHERE id=". $id;
    $resultado = $con->query($sql);
    $datos = $resultado->fetch_assoc();

    $sql1 = "SELECT id,editorial FROM editoriales";
    $resultadoeditorial=$con->query($sql1);
    ?>

    <form action="javascript:editarLibro()" class="formulario" id="formularioeditar">
        <input type="hidden" name="id" value="<?php echo $datos["id"];?>">
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" id="titulo" value="<?php echo $datos["titulo"];?>"><br>
        <label for="autor">Autor:</label>
        <input type="text" name="autor" id="autor" value="<?php echo $datos["autor"];?>"><br>
        <label for="editorial">Editorial:</label>
        <select name="editorial" id="editorial">
        <?php 
            while ($editorial = $resultadoeditorial->fetch_assoc()) {
            ?>
            <option value="<?php echo $editorial["id"] ?>"<?php echo $editorial["id"]==$datos['ideditorial']?"selected":"";?>><?php echo $editorial["editorial"]?> </option>
            <?php } ?>
        </select><br>
        <label for="editorial">Anio:</label>
        <input type="number" name="anio" id="anio" value="<?php echo $datos["anio"];?>"><br>
        <input type="submit" value="Editar">
    </form>