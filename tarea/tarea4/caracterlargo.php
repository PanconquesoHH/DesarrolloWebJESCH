<?php

function encontrarPalabraMasLarga($cadena) {
  
    $palabras = explode(" ", $cadena);
    $palabraMasLarga = "";

  
    foreach ($palabras as $palabra) {
        if (strlen($palabra) > strlen($palabraMasLarga)) {
            $palabraMasLarga = $palabra;
        }
    }

    return $palabraMasLarga;
}


$cadena = "Este es un ejemplo de una cadena de texto con varias palabras";

echo "La palabra más larga es: '" . encontrarPalabraMasLarga($cadena) . "'.";
?>
