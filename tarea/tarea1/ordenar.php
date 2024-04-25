<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Palabras Ordenadas</title>
    <style>
        .lista-ordenada {
            border: 2px solid red;
            background-color: yellow;
            padding: 10px;
            width: fit-content;
            margin: auto;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Palabras Ordenadas</h2>
    <div class="lista-ordenada">
        <ul>
            <?php
            include 'funciones.php';

            if (isset($_POST['cantidad'], $_POST['palabras'])) {
                $cantidad = $_POST['cantidad'];
                $palabras = $_POST['palabras'];

                
                $palabrasOrdenadas = ordenarPalabras($palabras);

            
                foreach ($palabrasOrdenadas as $palabra) {
                    echo "<li>$palabra</li>";
                }
            } else 
            ?>
        </ul>
    </div>
</body>
</html>
