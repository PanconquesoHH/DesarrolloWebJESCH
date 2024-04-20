<?php
class Cola {
    private $cola = [];
    private $tipo;

    public function __construct($tipo) {
        $this->tipo = $tipo;
    }

    public function insertarDelante($elemento) {
        if ($this->tipo === 'Normal' || $this->tipo === 'dobleentrada') {
            array_unshift($this->cola, $elemento);
        } else {
            echo "Tipo de cola no válido.";
        }
    }

    public function insertarDetras($elemento) {
        if ($this->tipo === 'Normal' || $this->tipo === 'dobleentrada') {
            array_push($this->cola, $elemento);
        } else {
            echo "Tipo de cola no válido.";
        }
    }

    public function eliminar() {
        if (($this->cola)) {
            return array_shift($this->cola);
        } else {
            echo "La cola está vacía.";
            return null;
        }
    }

    public function mostrar() {
        return $this->cola;
    }
}
?>
