<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Suma de Números</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            background-color: green; 
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Formulario para enviar los números -->
    <form method="GET">
        <label for="numero1">Número 1:</label>
        <input type="text" id="numero1" name="numero1">
        <br>
        <label for="numero2">Número 2:</label>
        <input type="text" id="numero2" name="numero2">
        <br>
        <button type="submit">Sumar</button>
    </form>

    <?php
    // Verificar si los números están seteados y no son vacíos
    if (($_GET['numero1']) && ($_GET['numero2'])) {
        $numero1 = ($_GET['numero1']); // Convertimos a flotante para manejar números decimales
        $numero2 = ($_GET['numero2']);

        // Realizar la suma
        $suma = $numero1 + $numero2;

        // Mostrar el resultado en una tabla
        echo "<table>";
        echo "<tr><th>Número 1</th><th>Operador</th><th>Número 2</th><th>=</th><th>Resultado</th></tr>";
        echo "<tr><td>$numero1</td><td>+</td><td>$numero2</td><td>=</td><td>$suma</td></tr>";
        echo "</table>";
    } 
    
    ?>
</body>
</html>
