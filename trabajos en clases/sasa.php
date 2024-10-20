<form action="Fdatos4.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <th>Fotografía</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>CU</th>
            <th>Sexo</th>
            <th>Carrera</th>
        </tr>

        <!-- Generamos 4 filas de entrada para insertar datos -->
        <?php for ($i = 1; $i <= 4; $i++) { ?>
        <tr>
            <td><input type="file" name="foto<?php echo $i; ?>" accept="image/*"></td>
            <td><input type="text" name="nombres<?php echo $i; ?>" required></td>
            <td><input type="text" name="apellidos<?php echo $i; ?>" required></td>
            <td><input type="text" name="cu<?php echo $i; ?>" required></td>
            <td>
                <input type="radio" name="sexo<?php echo $i; ?>" value="M" required> Masculino
                <input type="radio" name="sexo<?php echo $i; ?>" value="F" required> Femenino
            </td>
            
            <td>
                
                <select name="codigocarrera<?php echo $i; ?>" required>
                    
                    <?php 
                    // Recorremos las carreras obtenidas de la base de datos
                    mysqli_data_seek($result, 0);
                     // Reiniciamos el puntero del resultado
                    while ($row = mysqli_fetch_assoc($result))  { ?>
                    
                        <option value="<?php echo $row['codigo']; ?>"><?php echo $row['carrera']; ?></option>
                        
                    <?php } ?>
                </select>
            </td>
        </tr>
        <?php } ?>
    </table>

</form>