<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tablero de Ajedrez</title>
    <style>
        .tablero {
            width: 320px;
            height: 320px;
            display: grid;
            grid-template-columns: 40px 40px 40px 40px 40px 40px 40px 40px; 
            grid-template-rows: 40px 40px 40px 40px 40px 40px 40px 40px; 
        }
        .cuadro {
            width: 40px;
            height: 40px;
        }
        .negro {
            background-color: black;
        }
        .blanco {
            background-color: white; 
        }
    </style>
</head>
<body>
    <div class="tablero">
        <?php
        
        for ($fila = 0; $fila < 8; $fila++) {
            for ($columna = 0; $columna < 8; $columna++) {
                
                if (($fila + $columna) % 2 == 0) {
                    echo '<div class="cuadro blanco"></div>';
                } else {
                    echo '<div class="cuadro negro"></div>';
                }
            }
        }
        ?>
    </div>
</body>
</html>
