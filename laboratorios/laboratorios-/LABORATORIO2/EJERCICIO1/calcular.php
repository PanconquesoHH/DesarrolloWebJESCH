<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Suma de Dígitos</title>
</head>
<body>
    <h2>Suma de Dígitos</h2>
    <?php
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];
        $sumaDigitos = 0;
        
        
        if ( $numero > 0) {
            $numeroStr = (string)$numero;
            
          
            for ($i = 0; $i < strlen($numeroStr); $i++) {
                $sumaDigitos += (int)$numeroStr[$i];
            }
              
            echo "<p>La suma de los dígitos de $numero es: $sumaDigitos</p>";
        } else {
            echo "<p>Ingresa un número positivo válido.</p>";
        }
    } else {
        echo "<p>Ingresa un número en el formulario.</p>";
    }
    ?>
  
    
</body>
</html>