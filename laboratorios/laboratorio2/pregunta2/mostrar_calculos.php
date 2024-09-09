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

    public function CalcularMayor() {
        return max($this->a, $this->b, $this->c);
    }

    public function MostrarCalculos() {
        echo "<table border='1'>
                <tr>
                    <th>Valor de A</th>
                    <th>Valor de B</th>
                    <th>Valor de C</th>
                </tr>
                <tr>
                    <td>{$this->a}</td>
                    <td>{$this->b}</td>
                    <td>{$this->c}</td>
                </tr>
                <tr>
                    <td colspan='3'><b>Suma</b>: " . $this->CalcularSuma() . "</td>
                </tr>
                <tr>
                    <td colspan='3'><b>Mayor</b>: " . $this->CalcularMayor() . "</td>
                </tr>
            </table>";
    }
}
$operaciones = new Operaciones($_SESSION['a'], $_SESSION['b'], $_SESSION['c']);
$operaciones->MostrarCalculos();
?>;
