<?php
session_start();
if (!isset($_SESSION['a']) || !isset($_SESSION['b']) || !isset($_SESSION['c'])) {
    exit();
}

class Operaciones {
    public $a;
    public $b;
    public $c;

    public function __construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function CalcularSuma() {
        return $this->a + $this->b + $this->c;
    }

    public function CalcularResta() {
        return $this->a - $this->b - $this->c;
    }

    public function CalcularMultiplicacion() {
        return $this->a * $this->b * $this->c;
    }

    public function CalcularDivision() {
        return $this->a / $this->b / $this->c;
    }
}
    ?>;