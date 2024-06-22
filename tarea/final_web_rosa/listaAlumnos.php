<?php

class Alumno {
    public $CU;
    public $nombres;
    public $apellidos;

    public function __construct($CU, $nombres, $apellidos) {
        $this->CU = $CU;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
    }
}

class ListaAlumnos {
    private $lista;

    public function __construct() {
        if (!isset($_SESSION['lista_alumnos'])) {
            $_SESSION['lista_alumnos'] = array();
        }

        $this->lista = &$_SESSION['lista_alumnos'];
    }

    public function insertarAlumno($CU, $nombres, $apellidos) {
        $alumno = new Alumno($CU, $nombres, $apellidos);
        array_push($this->lista, $alumno);
    }

    public function eliminarAlumno($id) {
        unset($this->lista[$id]);
    }

    public function mostrarLista() {
        echo "<table>
                <tr>
                    <th>CU</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Acciones</th>
                </tr>";

        foreach ($this->lista as $alumno) {
            echo "<tr>
                    <td>{$alumno->CU}</td>
                    <td>{$alumno->nombres}</td>
                    <td>{$alumno->apellidos}</td>
                    <td><button onclick='eliminarAlumno({$alumno->CU})'>Eliminar</button></td>
                  </tr>";
        }

        echo "</table>";
    }
}

?>
