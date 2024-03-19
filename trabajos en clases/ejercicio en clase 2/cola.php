<?php
class Cola {
    private $elementos;
    private $ultimo;
    private $primero;
    public function __construct()
    {
        $this->primero = 0;
        $this->ultimo = 0;
        $this->elementos=array();
        
    }
    public function insertar($valor)
    {
        $this->ultimo ++;
        $this->elementos[$this->ultimo]=$valor;
    }
    public function eliminar($valor)
{
    if (!isset($this->elementos[$valor])) {
        return 'El valor no existe en la cola.';
    }

    if ($this->primero == $this->ultimo) {
        return 'La cola está vacía';
    } else {
        // Usar $valor como índice para eliminar elemento
        $elementoEliminado = $this->elementos[$valor];
        unset($this->elementos[$valor]);
        $this->primero++;
        return $elementoEliminado;
    }
}
   
    public function mostrar()
    {
        if($this->primero == $this ->ultimo){
        echo'la cola esta vacia';
    }
    else {
         for ($i = $this-> primero + 1 ; $i <= $this->ultimo; $i++ )
         echo $this->elementos[$i] . "<br>";
    }
        
    
}

}

?>
