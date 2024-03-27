<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>Llenar Palabras</h2>
    <form action="ordenar.php" method="post">
        <?php
        if (isset($_POST['cantidad'])) {
            $cantidad = $_POST['cantidad'];
            echo "<input type='hidden' name='cantidad' value='$cantidad'>";
            for ($i = 0; $i < $cantidad; $i++) {
                echo "<label for='palabra_$i'>Palabra " . ($i + 1) . ":</label>";
                echo "<input type='text' name='palabras[]' id='palabra_$i' required><br>";
            }
            echo "<button type='submit'>Ordenar</button>";
        } else {
            echo "<p>No se recibió el número de palabras.</p>";
        }
        ?>
    </form>
</body>
</html>
