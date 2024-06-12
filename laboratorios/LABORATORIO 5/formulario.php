<script src="script.js"></script>
<?php session_start(); 
    
    include('conexion.php');
    $sql = "SELECT l.id,titulo,autor,e.editorial as editorial,anio FROM libros l
    LEFT JOIN editoriales e ON l.ideditorial = e.id";
    $resultado = $con->query($sql);

    $sqleditorial="SELECT id,editorial FROM editoriales";
    $resultadoeditorial=$con->query($sqleditorial);
    ?>
    <div class="contenedor" style="width:70%;border:2px solid black">
    <table border='1' style="border-collapse:collapse; width:90%; text-align:center; margin: auto">
        
        <th>Titulo</th>
        <th>Autor</th>
        <th>Editorial</th>
        <th>Año</th>
        <th>Operaciones</th>
        <?php
        while ($row = $resultado->fetch_assoc()) {
            ?>
            <tr>
                
                <td><?php echo $row['titulo'];?></td>
                <td><?php echo $row['autor'];?></td>
                <td><?php echo $row['editorial'];?></td>
                <td><?php echo $row['anio'];?></td>
                <td>
                    <a href="javascript:editar(<?php echo $row['id'] ?>)">Editar</a>
                    <a href="javascript:eliminar(<?php echo $row['id'] ?>)">Eliminar</a>
                    <a href="javascript:mostrar(<?php echo $row['id'] ?>)">Mostrar</a>
                </td>
               
            </tr>
            
            <?php
        }
        ?>
        
    </table>
    
    <div id="operacion">Operacion Insertar</div>
    <div id="formularios">
    <form action="javascript:insertar()" id="formulario_insertar">
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo">
        <br>
        <label for="autor">Autor:</label>
        <input type="text" name="autor" >
        <br>
        <label for="editorial">Editorial:</label>
        <select name="editorial" id="editorial">
            <?php
            while ($row = $resultadoeditorial->fetch_assoc()) {

            ?>
            <option value="<?php echo $row['id'] ?>"><?php echo $row['editorial'] ?> </option>
            <?php } ?>
        </select>
        <br>
        <br>
        <label for="editorial">Anio:</label>
        <input type="number" name="anio">
        <br>
        <input type="submit" value="Insertar">
        </form>
    </div>
        </div>

    
