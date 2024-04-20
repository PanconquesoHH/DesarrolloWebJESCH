<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .primos-list {
            border: 3px solid green !important;
            background-color: yellow;
            padding: 10px;
            max-width: 300px;
            margin: 20px;
            list-style: none;
        }
        
    </style>
</head>
<body>
    <h2>Números Primos</h2>
    <?php
    if (isset($_POST['cantidad'])) {
        $cantidad = $_POST['cantidad'];
        $numPrimosEncontrados = 0;
        $num = 2;
    
        echo "<ul class='primos-list'>";
        while ($numPrimosEncontrados < $cantidad) {
            $esPrimo = true; 
            if ($num <= 1) {
                $esPrimo = false;
            } else {
                for ($i = 2; $i * $i <= $num; $i++) {
                    if ($num % $i == 0) {
                        $esPrimo = false; 
                        break; 
                    }
                }
            }
    
            if ($esPrimo) {
                echo "<li>$num</li>";
                $numPrimosEncontrados++;
            }
            $num++;
        }
        echo "</ul>";
    } 
    ?>
        
   
</body>
</html>



