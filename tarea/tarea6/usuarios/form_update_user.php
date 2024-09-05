<?php
include 'conexion.php';
$id = $_GET['id'];

$sql = "SELECT id, email, nivel FROM usuarios WHERE id=$id";
$resultado = $con->query($sql);
$fila = $resultado->fetch_assoc();
?>
<form action="update_user.php" method="post">
    <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
    
    <label for="email">Email:</label>
    <input type="email" name="email" value="<?php echo $fila['email']; ?>" required><br>

    <label for="nivel">Nivel:</label>
    <input type="number" name="nivel" value="<?php echo $fila['nivel']; ?>" required><br>

    <input type="submit" value="Actualizar Usuario">
</form>
