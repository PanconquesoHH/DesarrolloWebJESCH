<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Mesa</title>
</head>
<body>
    <h1>Registro de Mesa</h1>
    <form id="formMesa" action="guardar_mesa.php" method="POST">
        <label for="departamento">Departamento:</label>
        <select id="departamento" name="departamento">
            <option value="">Seleccione un Departamento</option>
            <?php
   
            include 'conexion.php';
            if ($conn) {
                $query = "SELECT * FROM departamentos";
                $result = $conn->query($query);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='{$row['id']}'>{$row['nombre']}</option>";
                    }
                } else {
                    echo "<option>No se encontraron departamentos</option>";
                }
            } else {
                echo "<option>Error en la conexión</option>";
            }
            ?>
        </select>

        <br><br>

        <label for="provincia">Provincia:</label>
        <select id="provincia" name="provincia">
            <option value="">Seleccione una Provincia</option>
        </select>

        <br><br>

        <button type="submit">Registrar Mesa</button>
    </form>

    <script>
        document.getElementById('departamento').addEventListener('change', function() {
    const departamentoId = this.value;
    if (departamentoId) {
        fetch(`obtener_provincias.php?departamento_id=${departamentoId}`)
            .then(response => response.json())
            .then(data => {
                const provinciaSelect = document.getElementById('provincia');
                provinciaSelect.innerHTML = '<option value="">Seleccione una Provincia</option>';
                data.forEach(provincia => {
                    provinciaSelect.innerHTML += `<option value="${provincia.id}">${provincia.nombre}</option>`;
                });
            })
            .catch(error => console.error('Error al cargar las provincias:', error));
    } else {
        document.getElementById('provincia').innerHTML = '<option value="">Seleccione una Provincia</option>';
    }
});
    </script>
</body>
</html>
