<?php
#acceso solo para usuarios logueados
include('conexion.php');

$sql = "SELECT * FROM libros";

$resultado = $con->query($sql); 
if ($resultado->num_rows > 0) 
{
?>
    <table>
        <tr>
            <th>Fotografia</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>ID Editorial</th>
            <th>Año</th>
            <th>ID Usuario</th>
            <th>ID Carrera</th>
            <th>Operaciones</th>
        </tr>

        <?php while ($row = $resultado->fetch_assoc()) {#fetch_assoc() devuelve un array asociativo que corresponde a la fila obtenida o NULL si no hubiera más filas.
        #fetch te ira devolviendo fila por fila hasta que no haya mas filas
        ?>
            <tr>
                <td><img width="100px" src="images/<?php echo $row['imagen'];  ?>" alt=""> </td>
                <td><?php echo $row['titulo'] ?> </td>
                <td><?php echo $row['autor'] ?></td>
                <td><?php echo $row['ideditorial'] ?></td>
                <td><?php echo $row['anio'] ?> </td>
                <td><?php echo $row['idusuario'] ?> </td>
                <td><?php echo $row['idcarrera'] ?> </td>
                <td>
                    <a href="javascript:cargarContenidoFetch('form_libro_update.php?id=<?php echo $row ['id'];?>')">Editar</a>
                    <a href="javascript:eliminarLibro(<?php echo $row['id'] ?>)">Eliminar</a>
                </td>
            </tr>
        <?php } ?>
    </table>
<?php
}
else 
{
    echo "la tabla no tiene datos que mostrar";
}
?>