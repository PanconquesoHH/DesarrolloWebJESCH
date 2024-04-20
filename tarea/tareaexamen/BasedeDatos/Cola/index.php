<?php
require_once 'Cola.php'; // Incluir la clase Cola antes de iniciar la sesión

session_start();

// Verificar si la cola ya está creada en la sesión
$cola = ($_SESSION['cola']) ? $_SESSION['cola'] : null;

// Crear la cola si no existe
if (!$cola) {
    $cola = new Cola('Normal');
    $_SESSION['cola'] = $cola;
}

// Procesar acciones del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $accion = $_POST['accion'];

    switch ($accion) {
        case 'insertar_delante':
            $elemento = $_POST['elemento'];
            $cola->insertarDelante($elemento);
            $_SESSION['cola'] = $cola;
            break;
        case 'insertar_detras':
            $elemento = $_POST['elemento'];
            $cola->insertarDetras($elemento);
            $_SESSION['cola'] = $cola;
            break;
        case 'eliminar':
            $cola->eliminar();
            $_SESSION['cola'] = $cola;
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cola</title>
</head>
<body>
    <h1>Operaciones de la Cola</h1>
    <form action="index.php" method="POST">
        <label for="elemento">Elemento:</label>
        <input type="text" id="elemento" name="elemento" required><br><br>
        <button type="submit" name="accion" value="insertar_delante">Insertar Delante</button>
        <button type="submit" name="accion" value="insertar_detras">Insertar Detrás</button>
        <button type="submit" name="accion" value="eliminar">Eliminar</button>
    </form>

    <h2>Cola Actual:</h2>
    <?php
    $elementos = $cola->mostrar();
    if (($elementos)) {
        echo "<ul>";
        foreach ($elementos as $elemento) {
            echo "<li>$elemento</li>";
        }
        echo "</ul>";
    } 
    ?>
</body>
</html>
