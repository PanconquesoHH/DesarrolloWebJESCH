<?php

$numeros = [12, 45, 7, 89, 23];

$mayor = max($numeros);
$menor = min($numeros);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mayor y Menor de 5 Números</title>
    <style>
        .resultado {
            border: 2px solid red; 
            padding: 10px;
            margin: 10px;
            width: 200px;
            text-align: center;
        }
    </style>
</head>
<body>
    
    <div class="resultado">
        <h3>Mayor</h3>
        <p><?php echo $mayor; ?></p>
    </div>

    <div class="resultado">
        <h3>Menor</h3>
        <p><?php echo $menor; ?></p>
    </div>
</body>
</html>


