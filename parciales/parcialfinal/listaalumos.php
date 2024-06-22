<?php
session_start();

class Alumnos {
    public $CU;
    public $nombre;
    public $apellido;

    public function __construct($CU, $nombre, $apellido) {
        $this->CU = $CU;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }
}

class ListaAlumnos {
    private $lista = array();

    public function __construct() {
        if (isset($_SESSION['lista_alumnos'])) {
            $this->lista = $_SESSION['lista_alumnos'];
        }
    }

    public function insertarAlumno($CU, $nombre, $apellido) {
        $alumno = new Alumnos($CU, $nombre, $apellido);
        $this->lista[] = $alumno;
        $_SESSION['lista_alumnos'] = $this->lista;
    }

    public function eliminarAlumno() {
        array_pop($this->lista);
        $_SESSION['lista_alumnos'] = $this->lista;
    }

    public function mostrarLista() {
        return $this->lista;
    }
}

if (!isset($_SESSION['lista_alumnos'])) {
    $_SESSION['lista_alumnos'] = array();
}
?>
