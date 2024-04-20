<?php
class Utiles {
    private $cadena;

    public function __construct($cadena) {
        $this->cadena = $cadena;
    }

    public function aumentarGuiones($n) {
        $resultado = '';
        $longitud = strlen($this->cadena);
        for ($i = 0; $i < $longitud; $i++) {
            $resultado .= $this->cadena[$i];
            if ($i < $longitud - 1) { // No añadir guiones después del último caracter
                $resultado .= str_repeat('-', $n);
            }
        }
        return $resultado;
    }
}
?>
